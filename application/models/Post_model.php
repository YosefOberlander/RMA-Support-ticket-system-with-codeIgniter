<?php

    class Post_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function create_post() {
            $data = array (
                'rma_request_count' => $this->input->post('rma_request_count'),
                'reference_number' => $this->input->post('customer_reference_number'),
                'name' => $this->input->post('customer_name'),
                'email' => $this->input->post('customer_email'),
                'phone' => $this->input->post('customer_phone'),
                'extension' => $this->input->post('customer_extension'),
                'fax' => $this->input->post('customer_fax'),
                'company' => $this->input->post('customer_company'),
                'marketplace_name' => $this->input->post('customer_marketplace'),
                'order_number' => $this->input->post('customer_order_number'),
                'address_one' => $this->input->post('customer_address_one'),
                'address_two' => $this->input->post('customer_address_two'),
                'city' => $this->input->post('customer_city'),
                'state' => $this->input->post('customer_state'),
                'zip_code' => $this->input->post('customer_zip_code'),
                'return_type' => $this->input->post('customer_return_type'),
                'hardware_problem' => $this->input->post('customer_hardware_problem'),
                'sku' => $this->input->post('customer_sku'),
                'product_name' => $this->input->post('customer_product_name'),
                'quantity' => $this->input->post('customer_quantity'),
                'invoice_number' => $this->input->post('invoice_number_input'),
                'po_number' => $this->input->post('po_number_input'),
                'hardware_serial_numbers' => $this->input->post('customer_hardware_serial_numbers'),
                'comments' => $this->input->post('customer_comments')
            );
            return $this->db->insert('request_rma_form', $data);
        }
    }