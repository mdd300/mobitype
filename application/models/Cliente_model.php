<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function createCliente($data){

        $this->load->library('Fo_login');

        $cliente = array(
            "cliente_nome" => $data["cliente_nome"],
            "cliente_email" => $data["cliente_email"],
            "cliente_senha" => Fo_login::encrypt_password($data["cliente_senha"]),
            "cliente_data" => date('d/m/Y')
        );

        $this->db->insert("tb_clientes_mobisys",$cliente);

        return $this->db->insert_id();

    }

    public function listCliente($data){

        if (isset($data["where"])){
            $this->db->where($data["where"]);
        }

        return $this->db->get("tb_clientes_mobisys")->result();
    }

    public function loginIn_model($data){

        $this->load->library('Fo_login');
        $this->load->library('session');

        $this->db->where("cliente_email", $data["nome_cliente"]);

        $result = $this->db->get("tb_clientes_mobisys");

        if($result->num_rows() > 0) {

            $user = $result->result()[0];

            $pass = Fo_login::check_password($data["senha_cliente"],$user->cliente_senha);
            if($pass == true) {
                $this->session->set_userdata("MobiSys_session", array(
                    'cliente_id' => $user->cliente_id,
                    'cliente_nome' => $user->cliente_nome
                ));
                return true;

            }else{
                return false;
            }

        }else{
            return false;

        }

    }

    public function loginIn2_model($data){

        $this->load->library('Fo_login');
        $this->load->library('session');

        $this->db->where("user_email", $data["nome_cliente"]);

        $result = $this->db->get("tb_users");

        if($result->num_rows() > 0) {

            $user = $result->result()[0];

            $pass = Fo_login::check_password($data["senha_cliente"],$user->user_senha);
            if($pass == true) {
                $this->session->set_userdata("MobiSys_session", array(
                    'user_id' => $user->user_id,
                    'user_nome' => $user->user_nome
                ));
                return true;

            }else{
                return false;
            }

        }else{
            return false;

        }

    }
}