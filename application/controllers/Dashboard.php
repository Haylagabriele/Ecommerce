<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->painel();
    }

    public function painel()
    {
        $parametros = array(
            'pagina' => 'Painel',
            'caminho_pagina' => 'dashboard/painel',
            'css' => 'dashboard/css'
        );
        $this->load->view('template/core', $parametros);
    }
}
