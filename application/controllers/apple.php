<?php

class Apple extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('apple');
        $this->load->view('templates/footer');
    }
}
