<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FormaPagamento extends CI_Controller
{

    public function __contructor(){
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
       //doing nothing
    }

    public function salvar()
    {
       //doing nothing
    }

    public function remover()
    {
       //doing nothing
    }
    
}
