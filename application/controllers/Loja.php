<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loja extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model("LojaModel");
   }

   public function index()
   {
      $this->listar();
   }

   public function listar()
   {
      $parametros = array(
         'pagina' => 'loja',
         'caminho_pagina' => 'loja/index',
         'javascript' => 'loja/js'
      );
      $this->load->view('template/core', $parametros);
   }

   public function consultar()
   {
      $consulta = $this->LojaModel->consultar();
      echo "<pre>";
      var_dump($consulta);
   }

   public function salvar($dados = null, $criterio = null)
   {
      if ($this->input->method() == 'post') {
         $this->form_validation->set_rules('loja_razao_social', 'Loja', 'required|min_length[3]');
         $this->form_validation->set_rules('loja_nome_fantasia', 'NomeFantasia', 'required');
         $this->form_validation->set_rules('loja_cnpj', 'Cnpj', 'required|numeric');
         $this->form_validation->set_rules('loja_cep', 'Cep', 'required|numeric');
         $this->form_validation->set_rules('loja_endereco', 'Endereço', 'required');
         $this->form_validation->set_rules('loja_estado', 'Estado', 'required|max_length[2]');
         $this->form_validation->set_rules('loja_cidade', 'cidade', 'required');
         $this->form_validation->set_rules('loja_tipo_entrega', 'Entrega', 'required|numeric|max_length[1]');
         $this->form_validation->set_rules('loja_tipo_taxa', 'Taxa', 'required|numeric|max_length[1]');
         $this->form_validation->set_rules('loja_valor_base', 'ValorBase', 'required|numeric|decimal');
         $this->form_validation->set_rules('loja_valor_km', 'km', 'required|numeric|decimal');


         if ($this->form_validation->run()) {
            $dados = $this->input->post();

            $resultado = $this->LojaModel->inserir($dados);
            var_dump($resultado);
         } else {
            echo validation_errors();
         }
      }
   }
   public function remover($codigo)
   {
      $resultado = $this->LojaModel->remover($codigo);
      var_dump($resultado);
   }
}
