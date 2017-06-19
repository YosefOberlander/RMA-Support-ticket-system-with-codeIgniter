<?php

    class Post_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function create_post() {
            $data = array (
                'rma_request_count' => $this->input->post('rma_request_count'),
                'reference_number' => $this->input->post('customer_reference_number'),
                'rma_request_date' => $this->input->post('rma_request_date'),
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

        function sendMail()
        {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'yosefoberlander99@gmail.com',
                'smtp_pass' => 'apples123',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );

            $rma_count = $this->input->post('rma_request_count');
            $reference_number = $this->input->post('customer_reference_number');
            $request_date = $this->input->post('rma_request_date');
            $productName = $this->input->post('customer_product_name');
            $status = "Pending";
            $return_type = $this->input->post('customer_return_type');
            $actions = "No Actions Available";
            $emailAddress = $this->input->post('customer_email');

            $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
            $message .= '<html xmlns="http://www.w3.org/1999/xhtml">';
            $message .= '<head>';
                $message .= '<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />';
                $message .= '<title>Verify RMA/Claim request information Form</title>';
                $message .= '<style style="text/css">';
                $message .= 'body {margin: 0 auto; padding: 0; min-width: 1200px !important; width: 1200px}';
                $message .= '.rma_success_table {background-color: #f0f0f0; border-collapse: inherit; text-align: left; padding: 2px;}';
                $message .= '.rma_success_table thead {background-color: #012880; color: #fff; border-bottom: #EC1C23;}';
                $message .= '.rma_success_table thead tr th {font-weight: 600; font-size: 15px; border: 1px solid; border-collapse: separate;}';
                $message .= '.rma_success_table thead tr th, .rma_success_table tbody tr td {padding: 04px; text-align: center;}';
                $message .= '</style>';
            $message .= '</head>';
            $message .= '<body>';
                $message .= '<table width="100%" class="rma_success_table">';
                    $message .= '<thead>';
                        $message .= '<tr>';
                            $message .= '<th></th>';
                            $message .= '<th>Reference Number</th>';
                            $message .= '<th>Request Date</th>';
                            $message .= '<th>Request Product Name</th>';
                            $message .= '<th>Status</th>';
                            $message .= '<th>Reason</th>';
                            $message .= '<th>Actions</th>';
                        $message .= '</tr>';
                    $message .= '</thead>';
                    $message .= '<tbody>';
                        $message .= '<tr>';
                            $message .= '<td>'."$rma_count".'</td>';
                            $message .= '<td>'."$reference_number".'</td>';
                            $message .= '<td>'."$request_date".'</td>';
                            $message .= '<td>'."$productName".'</td>';
                            $message .= '<td>'."$status".'</td>';
                            $message .= '<td>'."$return_type".'</td>';
                            $message .= '<td>'."$actions".'</td>';
                        $message .= '</tr>';
                    $message .= '</tbody>';
                $message .= '</table>';
            $message .= '</body>';
            $message .= '</html>';
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('yosefoberlander99@gmail.com');
            $this->email->to($emailAddress);
            $this->email->subject('TechWise Direct RMA/Claim Request Information');
            $this->email->message($message);
            if($this->email->send()) {
                $emailSuccess = '<div class="bs-callout bs-callout-success"><h4>Success!</h4><p>Thank You for your request, please check your e-mail!</p></div>';
            } else {
                $emailSuccess = '<div class="bs-callout bs-callout-danger"><h4>Oh Snap!</h4><p>Sorry, there was a problem sending your email</p></div>';
                //show_error($this->email->print_debugger());
            }
            return $emailSuccess;
        }
    }