<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUDModel extends CI_Model
{
    var $tabela = "";
    var $chavePrimaria = "";

    public function __construct($tabela = null, $chave = null)
    {
        parent::__construct();

        /* Realiza a instancica das variáveis necessárias para realizar o CRUD */
        $this->tabela = $tabela;
        $this->chavePrimaria = $chave;
    }

    public function CRUDModel($tabela = null, $chave = null)
    {
        $this->tabela = $tabela;
        $this->chavePrimaria = $chave;
    }

    public function inserir($dados)
    {
        try {
            $this->db->insert($this->tabela, $dados);
        } catch (\Exception $th) {
            $erros = array(
                'error' => $this->db->error(),
                'exception' => $th
            );
            return $erros;
        }
    }

    public function atualizar($dados, $criterio)
    {
        try {

            if (isset($dados[$this->chavePrimaria])) {

                foreach ($dados as $key => $value) {
                    $this->db->set($key, $value, FALSE);
                }

                foreach ($criterio as $key => $value) {
                    $this->db->where($key, $value);
                }

                $this->db->update($this->tabela, $dados);
            } else {
                return "Não há chave primária para executar atualização.";
            }
        } catch (\Exception $th) {
            $erros = array(
                'error' => $this->db->error(),
                'exception' => $th
            );
            return $erros;
        }
    }

    public function consultar($filtros = null, $limit = 50)
    {
        try {

            isset($filtros) ? $this->db->where($filtros) : null;

            $this->db->order_by($this->chavePrimaria, 'DESC');
            $this->db->limit($limit);

            return $this->db->get($this->tabela);
        } catch (\Exception $th) {
            $erros = array(
                'error' => $this->db->error(),
                'exception' => $th
            );
            return $erros;
        }
    }

    public function excluir($chavePrimaria)
    {
        try {
            $this->db->delete($this->tabela, array($this->chavePrimaria => $chavePrimaria));
        } catch (\Exception $e) {
            $erros = array(
                'error' => $this->db->error(),
                'exception' => $e
            );
            return $erros;
        }
    }
}
