<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Content extends CI_Controller {

        public function check_rma_status() {

            $data['title'] = "RMA-Return and Claim Search";

            $this->load->view('templates/header');
            $this->load->view('posts/status', $data);
            $this->load->view('templates/footer');
        }
    }