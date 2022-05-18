<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cardapio extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model("CardapioModel");
   }

   public function index()
   {

      $this->listar();
   }

   public function listar()
   {
      $parametros = array(
         'pagina' => 'cardapio',
         'caminho_pagina' => 'cardapio/index',
         'javascript' => 'cardapio/js',
         'css' => 'cardapio/css'
      );

      $this->load->view('template/core', $parametros);
   }

   public function consultar()
   {
      $consulta = $this->CardapioModel->consultar();
      echo "<pre>";
      var_dump($consulta);
   }

   public function salvar($dados = null, $criterio = null)
   {

      if ($this->input->method() == 'post') {
         $this->form_validation->set_rules('card_loja', 'Loja', 'required|numeric');
         $this->form_validation->set_rules('card_nome', 'Nome', 'required|min_length[3]|alpha');
         $this->form_validation->set_rules('card_situacao', 'Situação', 'required|max_length[1]|alpha');
         $this->form_validation->set_rules('card_link_publico', 'Publico', 'numeric');
         if ($this->form_validation->run()) {
            $dados = $this->input->post();
            switch (true) {
               case ($dados['card_situacao'] != "A" && $dados['card_situacao'] != "I");
                  echo "A situação é inválida";
                  die();
               default:
                  echo "Passou por todas as validações";
            }
            $resultado = $this->CardapioModel->inserir($dados);
            var_dump($resultado);
         } else echo validation_errors();
      } else {
         echo "solicitação inválida, utilize post";
      }
   }
   public function remover($codigo)
   {
      $resultado = $this->CardapioModel->remover($codigo);
      var_dump($resultado);
   }
}
