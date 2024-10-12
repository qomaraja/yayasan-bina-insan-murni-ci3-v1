<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perkenalan extends CI_Controller
{
    public function index()
    {
        $this->load->view('perkenalan');
    }
}
