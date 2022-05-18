<?php
  defined('BASEPATH') or exit('No direct script access allowed');

  class PedidoModel extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
    }


    public function consultar()
    {
      $dados = $this->db->get('Pedido');
      return $dados->result();
    }

    public function inserir($dados)
    {
      return $this->db->insert('pedido', $dados);
    }
    
    public function atualizar()
    {
    }

    public function remover($chavePrimaria){
      return $this->db->delete('pedido', array('ped_codigo' => $chavePrimaria));
  }
  }
