<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function toJson($dados)
    {
        header('Content-Type: application/json');
        $json = json_encode($dados);
        echo "{\"data\": " . $json . "}";
    }
}
