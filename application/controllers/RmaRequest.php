<?php

    class Rma extends CI_Controller {
        public function index() {

            $data['title'] = "RMA Request form";

            $this->load->view('templates/header');
            $this->load->view('rma/request-rma', $data);
            $this->load->view('templates/footer');
        }
    }