<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function index()
	{
	    $this->load->view('landing_page');

//		$this->load->view('structure/head');
//        $this->load->view('structure/header');
//        $this->load->view('site/home');
//        $this->load->view('structure/footer');
	}

	public function sistema(){

        $this->load->library('Fo_login');
        $this->load->library('session');

        $session = Fo_login::get();

        if($session !== false) {

            $this->load->view('sistema/structure/header',$session);
            $this->load->view('sistema/home');
            $this->load->view('sistema/structure/footer');
        }else{
            $this->load->view('sistema/login');
        }
    }

    public function mobisys(){
        $this->load->library('Fo_login');
        $this->load->library('session');
//        Fo_login::logout();

        $this->load->view('sistema/login');
    }
    public function mobisysAdmin(){
        $this->load->library('Fo_login');
        $this->load->library('session');
//        Fo_login::logout();

        $this->load->view('sis_user/login');

    }
    public function admin(){

        $data["menu"] = 1;
        $this->load->library('Fo_login');
        $this->load->library('session');

        $session = Fo_login::get();

        if($session !== false) {

        $this->load->view('sis_user/structure/header', $data);
        $this->load->view('sis_user/home');
        $this->load->view('sis_user/structure/footer');
        }else{
            $this->load->view('sis_user/login');
        }
    }

	public function saveCliente($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("Home_model");

        $retorno = $this->Home_model->setCliente_model($Data["cadastro"]);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

    public function login($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("Cliente_model");

        $retorno = $this->Cliente_model->loginIn_model($Data["login"]);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }
    public function login2($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("Cliente_model");

        $retorno = $this->Cliente_model->loginIn2_model($Data["login"]);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }
}
