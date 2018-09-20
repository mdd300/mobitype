<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pedido extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function index(){


        $data["menu"] = 2;


        $this->load->view('sis_user/structure/header', $data);
        $this->load->view('sis_user/pedido');
        $this->load->view('sis_user/structure/footer');
    }

    public function create(){
        $data["menu"] = 2;
        $data["id"] = $_GET['id'];

        $this->load->view('sis_user/structure/header', $data);
        $this->load->view('sis_user/addPedido');
        $this->load->view('sis_user/structure/footer');
    }

    public function add($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $DataPed = $Data["pedido"];

        $pedido = array(
            "pedido_nome" => $DataPed["pedido_nome"],
            "pedido_data_entrega " => $DataPed["pedido_data_entrega"],
            "pedido_link" => $DataPed["pedido_link"],
            "pedido_data" => date('d/m/Y'),
            "pedido_cliente" => $Data["cliente"]
        );

        $this->load->model("Pedido_model");
        $idPedido = $this->Pedido_model->create("tb_pedido",$pedido);

        foreach($DataPed["pedido_demandas"] as $key=>$value) {

            $demanda = array(
                "demanda_nome" => $value["demanda_nome"],
                "demanda_valor" => $value["demanda_valor"],
                "demanda_status" => $value["demanda_status"],
                "demanda_data" => date('d/m/Y'),
                "pedido_id" => $idPedido
            );

            $this->Pedido_model->create("tb_demanda",$demanda);

        }

        $retorno = $idPedido;

            if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

    public function getPed($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("Pedido_model");
        $retorno = $this->Pedido_model->listPedidos($Data);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

}