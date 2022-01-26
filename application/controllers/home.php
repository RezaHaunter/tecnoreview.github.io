<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['brand'] = $this->model_brand->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['brand'] = $this->model_brand->detail_brand($id);
        $this->load->view('templates/header');
        $this->load->view('detail_brand', $data);
        $this->load->view('templates/footer');
    }
}
