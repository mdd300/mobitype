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
}
