<?php

class Trending extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('trending');
        $this->load->view('templates/footer');
    }
}
