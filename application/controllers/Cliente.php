<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Cliente extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model("ClienteModel");
   }

   public function index()
   {

      $this->listar();
   }

   public function listar()
   {
      $parametros = array(
         'pagina' => 'cliente',
         'caminho_pagina' => 'cliente/index',
         'javascript' => 'cliente/js'
      );

      $this->load->view('template/core', $parametros);
   }

   public function consultar()
   {
      $consulta = $this->ClienteModel->consultar();
      echo "<pre>";
      var_dump($consulta);
   }
   public function salvar($dados = null, $criterio = null)
   {
      if ($this->input->method() == 'post') {
         $this->form_validation->set_rules('cli_nome', 'nome', 'required|min_length[3]');
         $this->form_validation->set_rules('cli_telefone', 'telefone', 'required');
         $this->form_validation->set_rules('cli_cpf', 'cpf', 'required');
         $this->form_validation->set_rules('cli_email', 'email', 'required|valid_email');
         $this->form_validation->set_rules('cli_cep', 'cep', 'alpha_numeric');
         $this->form_validation->set_rules('cli_rua', 'rua' );
         $this->form_validation->set_rules('cli_numero', 'Numero', 'numeric');
         $this->form_validation->set_rules('cli_complemento', 'complemento');
         if ($this->form_validation->run()) {
            $dados = $this->input->post();
            $resultado = $this->ClienteModel->inserir($dados);
            var_dump($resultado);
         } else echo validation_errors();
      }
   }
   public function remover($codigo)
   {
     $resultado = $this->ClienteModel->remover($codigo);
     var_dump($resultado);

   }
}
