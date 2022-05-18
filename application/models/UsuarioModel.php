<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuarioModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function consultar()
    {
        $dados = $this->db->get('usuario');
        return $dados->result();
    }

    public function inserir($dados)
    {
        return $this->db->insert('usuario', $dados);
    }
    
    public function atualizar()
    {

    }
    public function remover($chavePrimaria){
      return $this->db->delete('usuario', array('usu_codigo' => $chavePrimaria));
    }
}
