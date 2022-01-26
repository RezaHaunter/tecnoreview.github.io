<?php

class Newarrival extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('newarrival');
        $this->load->view('templates/footer');
    }
}
