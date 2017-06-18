<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Content extends CI_Controller {

        public function check_rma_status() {

            $data['title'] = "RMA-Return and Claim Search";

            $this->load->view('templates/header');
            $this->load->view('posts/status', $data);
            $this->load->view('templates/footer');
        }

        public function found_rma_record() {

            $data['title'] = "Current RMA/Claim Summary";

            $this->load->view('templates/header');
            $this->load->view('posts/current_rma_summary', $data);
            $this->load->view('templates/footer');
        }

        public function rma_summary_result() {

            $data['title'] = "Current RMA/Claim Summary";

            $this->load->view('templates/header');
            $this->load->view('posts/rma_summary_result', $data);
            $this->load->view('templates/footer');

        }
    }