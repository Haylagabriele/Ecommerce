<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produto extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model("ProdutoModel");
      //futuramente deve carregar o model 
      //futuramente deve possuir regras de criação da classe
   }

   public function index()
   {
      //por padrão, realizaremos a listagem
      $this->listar();
   }

   /* Grupo de Comandos CRUD 
     * é um grupo de comandos que são responsáveis pelas principais manipulações dos dados
     * quando associados a uma classe ou entidade representam as funções básicas de persistência 
     * da informação
     */

   public function listar()
   {
      $parametros = array(
         'pagina' => 'produto',
         'caminho_pagina' => 'produto/index',
         'javascript' => 'produto/js'
      );

      $this->load->view('template/core', $parametros);
   }
   public function consultar()
   {
      $consulta = $this->ProdutoModel->consultar();
      echo "<pre>";
      var_dump($consulta);
   }

   public function salvar($dados = null, $criterio = null)
   {
      if ($this->input->method() == 'post') {   
         $this->form_validation->set_rules('prod_loja', 'Loja');
         $this->form_validation->set_rules('prod_imagem', 'Imagem');
         $this->form_validation->set_rules('prod_nome', 'Nome', );
         $this->form_validation->set_rules('prod_valor', 'Valor', 'numeric'); 
         $this->form_validation->set_rules('prod_ingredientes', 'Ingredientes'); 
         $this->form_validation->set_rules('prod_tags', 'Tags'); 
         $this->form_validation->set_rules('prod_categoria', 'Categoria'); 
         if($this->form_validation->run()){
         $dados=$this->input->post();
         switch(true){
            // case ($dados['cat_situacao'] != "A" && $dados['cat_situacao']!="I");
            // echo "A situação é inválida";
            // die();
            default:
            echo "Passou por todas as validações";
   }
   $resultado = $this->ProdutoModel->inserir($dados);
   var_dump($resultado);   
}else echo validation_errors();
      }
   }
   public function remover($codigo)
   {
      $resultado = $this->ProdutoModel->remover($codigo);
      var_dump($resultado);
   }
}
