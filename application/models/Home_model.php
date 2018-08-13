<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {


    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function setCliente_model($data){

        $this->db->insert("tb_clientes", $data);

    }


  }
