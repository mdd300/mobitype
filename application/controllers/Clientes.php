<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function index(){
        $this->load->view('sis_user/structure/header');
        $this->load->view('sis_user/AddUsers');
        $this->load->view('sis_user/structure/footer');
    }

    public function add($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("Cliente_model");
        $retorno = $this->Cliente_model->createCliente($Data["add"]);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }
    public function listCli($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("Cliente_model");
        $retorno = $this->Cliente_model->listCliente($Data);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

    public function viewPage(){

        $this->load->library('Fo_login');
        $this->load->library('session');

        $session = Fo_login::get();

        if($session !== false) {
            $data["where"] = array(
                "pedidos.pedido_id" => $_GET['id']
            );

            $this->load->model("Pedido_model");
            $retorno = $this->Pedido_model->listPedidos($data);


            $link["link"] = $retorno[0]->pedido_link;

            $this->load->view('sistema/structure/header',$session);
            $this->load->view('sistema/view_page', $link);
            $this->load->view('sistema/structure/footer');
        }else{
            $this->load->view('sistema/login');
        }
    }

    public function getPed($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->library('Fo_login');
        $this->load->library('session');

        $session = Fo_login::get();

        $Data["where"] = array(
            "pedidos.pedido_cliente" => $session["cliente_id"]
        );
        $this->load->model("Pedido_model");
        $retorno = $this->Pedido_model->listPedidos($Data);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }
}