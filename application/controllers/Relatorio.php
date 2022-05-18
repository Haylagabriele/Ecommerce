<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Relatorio extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model("RelatorioModel");
      //futuramente deve carregar o model 
      //futuramente deve possuir regras de criação da classe
   }

   public function index()
   {
      
      $this->listar();
   }

   public function listar()
   {
      $parametros = array(
         'pagina' => 'relatorio',
         'caminho_pagina' => 'relatorio/index',
         'javascript' => 'relatorio/js',
         'css' => 'relatorio/css'
      );

      $this->load->view('template/core', $parametros);
   }
   public function consultar()
   {
      $consulta = $this->RelatorioModel->consultar();
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
         $dados=$this->input->post();
         
         if ($this->form_validation->run()) {
            $dados = $this->input->post();

            $resultado = $this->RelatorioModel->inserir($dados);
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
