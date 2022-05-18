<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Colaborador extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model("UsuarioModel");
   }

   public function index()
   {

      $this->listar();
   }

   public function listar()
   {
      $parametros = array(
         'pagina' => 'colaborador',
         'caminho_pagina' => 'colaborador/index',
         'javascript' => 'colaborador/js'
      );

      $this->load->view('template/core', $parametros);
   }

   public function consultar()
   {
      $consulta = $this->UsuarioModel->consultar();
      echo "<pre>";
      var_dump($consulta);
   }
   public function salvar($dados = null, $criterio = null)
   {
      if ($this->input->method() == 'post') { 
         $this->form_validation->set_rules('usu_situacao', 'situacao', 'required');
         $this->form_validation->set_rules('usu_nome', 'nome', 'required|min_length[3]');
         $this->form_validation->set_rules('usu_email', 'email', 'valid_email');
         $this->form_validation->set_rules('usu_telefone', 'telefone', 'alpha_numeric');
         $this->form_validation->set_rules('usu_senha', 'senha' );
         //$this->form_validation->set_rules('usu_data_cadastro', 'cadastro', 'regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');
         if ($this->form_validation->run()) {
            $dados = $this->input->post();
            $resultado = $this->UsuarioModel->inserir($dados);
            var_dump($resultado);
         } else echo validation_errors();
      }
   }
   public function remover($codigo)
   {
     $resultado = $this->UsuarioModel->remover($codigo);
     var_dump($resultado);

   }
}
