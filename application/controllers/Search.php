<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Search extends CI_Controller {

        public function __construct() {

            parent::__construct();
            $this->load->helper('form');
            $this->load->model('search_model');
        }

        public function index() {

            $data['title'] = "RMA-Return and Claim Search";

            $this->load->view('templates/header');
            $this->load->view('posts/status', $data);
            $this->load->view('templates/footer');
        }

        public function execute_rma_search() {

            // get the posted search term.
            $rmaReferenceNumber = $this->input->post('rma_reference_number');

            // use the model to retrieve the data form results
            $data['results'] = $this->search_model->get_results($rmaReferenceNumber);

            // pass the result into the view
            if (empty($data)) {

                $this->load->view('templates/header');
                $this->load->view('posts/no_record_found');
                $this->load->view('templates/footer');

            } else {

                $this->load->view('templates/header');
                $this->load->view('posts/current_rma_summary', $data);
                $this->load->view('templates/footer');

            }
        }
    }