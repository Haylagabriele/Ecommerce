<?php
  defined('BASEPATH') or exit('No direct script access allowed');

  class ProdutoModel extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
    }


    public function consultar()
    {
      $dados = $this->db->get('produto');
      return $dados->result();
    }

    public function inserir($dados)
    {
      return $this->db->insert('produto', $dados);
    }
    
    public function atualizar()
    {
    }
    public function remover($chavePrimaria){
      return $this->db->delete('produto', array('prod_codigo' => $chavePrimaria));
  }
  }
