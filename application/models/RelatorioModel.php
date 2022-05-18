<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RelatorioModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function consultar(){
        $dados = $this->db->get('relatorio');
        return $dados->result();
    }

    public function remover($chavePrimaria){
        return $this->db->delete('relatorio', array('pag_codigo' => $chavePrimaria));
    }

    public function inserir($dados){
        return $this->db->insert('pagamento', $dados);
    }
   
    public function atualizar(){

    }

}
