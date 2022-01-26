<?php

class Phone extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('phone');
        $this->load->view('templates/footer');
    }
}
