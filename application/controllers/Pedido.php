<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pedido extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model("PedidoModel");
      
   }

   public function index()
   {
     
      $this->listar();
   }

   public function listar()
   {
      $parametros = array(
         'pagina' => 'pedido',
         'caminho_pagina' => 'pedido/index',
         'javascript' => 'pedido/js'
      );

      $this->load->view('template/core', $parametros);
   }

   public function consultar()
   {
      $consulta = $this->PedidoModel->consultar();
      echo "<pre>";
      var_dump($consulta);
   }

   public function salvar($dados = null, $criterio = null)
   {

      if ($this->input->method() == 'post') {   
         $this->form_validation->set_rules('ped_data_criacao', 'Criacao', 'required');
         $this->form_validation->set_rules('ped_loja', 'Loja', 'required|numeric');
         $this->form_validation->set_rules('ped_cliente', 'Cliente', 'required');
         $this->form_validation->set_rules('ped_debito', 'Debito', 'required|numeric'); 
         $this->form_validation->set_rules('ped_credito', 'Credito', 'required|numeric'); 
         $this->form_validation->set_rules('ped_voucher', 'Voucher', 'required|numeric'); 
         $this->form_validation->set_rules('ped_usuario', 'usuario'); 
         $this->form_validation->set_rules('ped_situacao', 'Situacao', 'numeric'); 
         if($this->form_validation->run()){
         $dados=$this->input->post();
         
         switch(true){
            case ($dados['ped_situacao'] == "numeric" && $dados['ped_situacao']=="numeric");
            echo "A situação é inválida";
            die();
            default:
            echo "Passou por todas as validações";
         }
            $resultado = $this->PedidoModel->inserir($dados);
            var_dump($resultado);   
         }else echo validation_errors();
        
      }
   }
   public function remover($codigo)
   {
      $resultado = $this->PedidoModel->remover($codigo);
      var_dump($resultado);
   }
}
