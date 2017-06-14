<?php

class Posts extends CI_Controller {
    public function index() {

        $data['title'] = "RMA Request form";

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    public function create() {

        $this->form_validation->set_rules('customer_reference_number', 'Reference Number', 'required');
        $this->form_validation->set_rules('');
    }
}