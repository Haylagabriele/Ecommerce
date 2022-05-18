<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LojaModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function consultar(){
        $dados = $this->db->get('loja');
        return $dados->result();
    }

    public function remover($chavePrimaria){
        return $this->db->delete('loja', array('loja_codigo' => $chavePrimaria));
    }

    public function inserir($dados){
        return $this->db->insert('loja', $dados);
    }

    public function atualizar(){

    }

}
