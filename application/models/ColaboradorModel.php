<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ColaboradorModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return true;
    }
}
