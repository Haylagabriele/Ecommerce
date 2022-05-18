<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagamento extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model("PagamentoModel");
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
         'pagina' => 'pagamento',
         'caminho_pagina' => 'pagamento/index',
         'javascript' => 'pagamento/js'
      );

      $this->load->view('template/core', $parametros);
   }

   public function consultar()
   {
      $consulta = $this->PagamentoModel->consultar();
      echo "<pre>";
      var_dump($consulta);
   }

   public function salvar($dados = null, $criterio = null)
   {

      if ($this->input->method() == 'post') {
         $this->form_validation->set_rules('pag_loja', 'Loja', 'required|numeric');
         $this->form_validation->set_rules('pag_razao_social', 'required|numeric');
         $this->form_validation->set_rules('pag_cnpj', 'CNPJ', 'required|numeric');
         $this->form_validation->set_rules('pag_tipo_conta', 'required|numeric', 'numeric');
         $this->form_validation->set_rules('pag_agencia', 'required|numeric', 'numeric');
         $this->form_validation->set_rules('pag_agencia_digito', 'required|numeric',);
         $this->form_validation->set_rules('pag_conta', 'Conta', 'required');
         $this->form_validation->set_rules('pag_conta_digito', 'Contadigito', 'required|numeric');
         $this->form_validation->set_rules('pag_habilita_dinheiro', 'TipoConta', 'required|decimal');
         $this->form_validation->set_rules('pag_habilita_cartao_debito', 'cartaodebito', 'required|decimal');
         $this->form_validation->set_rules('pag_habilita_cartao_voucher', 'cartaovoucher');
         $this->form_validation->set_rules('pag_email_socio', 'emailsocio');
         $this->form_validation->set_rules('pag_cpf_socio', 'cpfocio', 'required|numeric');
         $this->form_validation->set_rules('pag_bandeira_debito', 'bandeiraDebito', 'required');
         $this->form_validation->set_rules('pag_bandeira_credito', 'bandeiracredito', 'required');
         $this->form_validation->set_rules('pag_bandeira_voucher', 'bandeiraVoucher');
        
         if ($this->form_validation->run()) {
            $dados = $this->input->post();

            $resultado = $this->PagamentoModel->inserir($dados);
            var_dump($resultado);
         } else {
            echo validation_errors();
         }
      }
   }
   public function remover($codigo)
   { 
      {
        $resultado = $this->PagamentoModel->remover($codigo);
        var_dump($resultado);
   
      }
   }
}
