<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categoria extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model("CategoriaModel");
   }

   public function index()
   {

      $this->listar();
   }

   public function listar()
   {
      $parametros = array(
         'pagina' => 'Categoria',
         'caminho_pagina' => 'categoria/index',
         'javascript' => 'categoria/js'
      );

      $this->load->view('template/core', $parametros);
   }

   public function consultar()
   {
      $consulta = $this->CategoriaModel->consultar();
      $consulta = $this->toJson($consulta);
   }

   public function salvar($dados = null, $criterio = null)
   {

      if ($this->input->method() == 'post') {
         $this->form_validation->set_rules('cat_loja', 'Loja', 'required|numeric');
         $this->form_validation->set_rules('cat_nome', 'Nome', 'required|min_length[3]');
         $this->form_validation->set_rules('cat_situacao', 'Situação', 'required|max_length[1]|alpha');
         $this->form_validation->set_rules('cat_ordem', 'Ordem', 'numeric');
         if ($this->form_validation->run()) {
            $dados = $this->input->post();
            switch (true) {
               case ($dados['cat_situacao'] != "A" && $dados['cat_situacao'] != "I");
                  echo "A situação é inválida";
                  die();
               default:
                  echo "Passou por todas as validações";
            }
            $resultado = $this->CategoriaModel->inserir($dados);
            var_dump($resultado);
         } else echo validation_errors();
      }
   }
   public function remover()
   {
      if ($this->input->method() == 'post') {
         $this->form_validation->set_rules('cat_codigo', 'Código da Categoria', 'required|numeric');
         if ($this->form_validation->run()) {
            $dados = $this->input->post();
            $resultado = $this->CategoriaModel->remover($dados['cat_codigo']);
            return $resultado;
         } else echo validation_errors();
      }
   }

   function toJson($dados)
   {

      $meta = array(
         "page" => 1,
         "pages" => 7,
         "perpage" => 50,
         "total" => 350,
         "sort" => "asc",
         "field" => "cat_codigo"
      );

      // converter para json
      header('Content-Type: application/json');
      header('Access-Control-Allow-Origin: *');
      header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
      header('Access-Control-Allow-Headers: *');

      //$meta = json_encode($meta, JSON_UNESCAPED_UNICODE);
      $dados = json_encode($dados, JSON_UNESCAPED_UNICODE);

      //echo "{\"meta\": " . $meta . ",";
      echo "{\"data\": " . $dados . "}";
   }
}
