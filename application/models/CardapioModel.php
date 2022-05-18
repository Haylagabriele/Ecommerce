  <?php
  defined('BASEPATH') or exit('No direct script access allowed');

  class CardapioModel extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
    }


    public function consultar()
    {
      $dados = $this->db->get('cardapio');
      return $dados->result();
    }

    public function inserir($dados)
    {
      return $this->db->insert('cardapio', $dados);
    }
    
    public function atualizar()
    {
    }

    public function remover($chavePrimaria){
      return $this->db->delete('cardapio', array('card_codigo' => $chavePrimaria));
  }
  }
