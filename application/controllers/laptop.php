<?php

class Laptop extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('laptop');
        $this->load->view('templates/footer');
    }
}
