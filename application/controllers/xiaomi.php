<?php

class Xiaomi extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('xiaomi');
        $this->load->view('templates/footer');
    }
}
