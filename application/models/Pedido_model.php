<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pedido_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function create($table,$data){

        $this->db->insert($table,$data);

        return $this->db->insert_id();

    }

    public function listPedidos($data){

        if (isset($data["where"])){
            $this->db->where($data["where"]);
        }

        $total = 0;
        $this->db->from("tb_pedido as pedidos");
        $pedidos = $this->db->get()->result();

        foreach ($pedidos as $key=>$value){
            $this->db->where("pedido_id",$value->pedido_id);
            $value->demandas = $this->db->get("tb_demanda")->result();
                foreach ($value->demandas as $keyD=>$valueD) {
                    if($valueD->demanda_status == 2)
                    $total += $valueD->demanda_valor;
                }
            $value->total = $total;

        }

        return $pedidos;
    }

}