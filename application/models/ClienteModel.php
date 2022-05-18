<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ClienteModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function consultar()
    {
        $dados = $this->db->get('cliente');
        return $dados->result();
    }

    public function inserir($dados)
    {
        return $this->db->insert('cliente', $dados);
    }
    
    public function atualizar()
    {

    }
    public function remover($chavePrimaria){
      return $this->db->delete('cliente', array('cli_codigo' => $chavePrimaria));
    }
}
