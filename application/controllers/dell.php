<?php

class Dell extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('dell');
        $this->load->view('templates/footer');
    }
}
