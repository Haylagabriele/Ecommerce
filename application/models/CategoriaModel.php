<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoriaModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function consultar(){
        $dados = $this->db->get('categoria');
        return $dados->result();
    }

    public function remover($chavePrimaria){
        return $this->db->delete('categoria', array('cat_codigo' => $chavePrimaria));
    }

    public function inserir($dados){
        return $this->db->insert('categoria', $dados);
    }

    public function atualizar(){

    }

}
