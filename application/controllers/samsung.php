<?php

class Samsung extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('samsung');
        $this->load->view('templates/footer');
    }
}
