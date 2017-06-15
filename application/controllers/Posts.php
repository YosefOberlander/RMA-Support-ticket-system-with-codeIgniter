<?php

class Posts extends CI_Controller {
    public function index() {

        $data['title'] = "RMA Request form";

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');

    }

    public function create() {
        $data['title'] = "RMA Request form";

        // for validation rules
       $this->form_validation->set_rules('customer_name', 'Name', 'required');
       $this->form_validation->set_rules('customer_email', 'email', 'required');
       $this->form_validation->set_rules('customer_phone', 'phone', 'required');
       $this->form_validation->set_rules('customer_order_number', 'Order Number', 'required');
       $this->form_validation->set_rules('customer_address_one', 'Address 1', 'required');
       $this->form_validation->set_rules('customer_city', 'City', 'required');
       $this->form_validation->set_rules('customer_state', 'State', 'required');
       $this->form_validation->set_rules('customer_zip_code', 'Zip Code', 'required');
       $this->form_validation->set_rules('customer_return_type', 'Return Type', 'required');
       $this->form_validation->set_rules('customer_sku', 'Sku', 'required');
       $this->form_validation->set_rules('customer_quantity', 'Quantity', 'required');

       if($this->form_validation->run() === FALSE ) {
           $this->load->view('templates/header');
           $this->load->view('posts/create', $data);
           $this->load->view('templates/footer');
       } else {
           $this->post_model->create_post();
           $this->success();
       }
    }

    public function success() {
        $data['title'] = "Verify RMA/Claim request information Form";

        $this->post_model->create_post();
        $this->load->view('templates/header');
        $this->load->view('posts/success', $data);
        $this->load->view('templates/footer');
    }
}