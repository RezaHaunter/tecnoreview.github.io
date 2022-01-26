<?php

class Brand extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('brand');
        $this->load->view('templates/footer');
    }
}
