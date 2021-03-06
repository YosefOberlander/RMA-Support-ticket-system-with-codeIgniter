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

        function sendCustomerCopyRMARequest() {
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

            /** @var $emailAddress  get the users email address from the form
             * @var $supportEmailAddress send the rma request to rma
             */
            $emailAddress = $this->input->post('customer_email');
            $sendEmailsTo = array($emailAddress);

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
            $this->email->to($sendEmailsTo);
            $this->email->subject('TechWise Direct RMA/Claim Request Information');
            $this->email->message($message);
            if($this->email->send()) {
                $emailSuccess =
                '<div class="bs-callout bs-callout-success">
                    <div class="a-alert-success">
                        <i class="a-icon a-icon-alert"></i>
                        <h4>Success!</h4>
                        <p>Thank You for your request, An email confirmation has been sent to you.</p>
                    </div>
                </div>';
            } else {
                $emailSuccess = '<div class="bs-callout bs-callout-danger"><h4>Oh Snap!</h4><p>Sorry, there was a problem sending your email</p></div>';
                //show_error($this->email->print_debugger());
            }
            return $emailSuccess;
        }

        public function sendAdminCopyRmaRequest() {

            /**
             * @var $supportEmailAddress = admin email address
             * @var $message = email template
             * @var  $config = array of mail server settings
             */

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


            $supportEmailAddress = 'rma@techwisedirect.com';

            $rmaReferenceNumber = $this->input->post('customer_reference_number');
            $rmaRequestDate = $this->input->post('rma_request_date');
            $rmaRequestName = $this->input->post('customer_name');
            $rmaRequestEmail = $this->input->post('customer_email');
            $rmaRequestMarketplace = $this->input->post('customer_marketplace');
            $rmaRequestOrderNumber = $this->input->post('customer_order_number');
            $rmaRequestReturnType = $this->input->post('customer_return_type');
            $rmaRequestSku = $this->input->post('customer_sku');
            $rmaRequestProductName = $this->input->post('customer_product_name');
            $rmaRequestQty = $this->input->post('customer_quantity');
            $rmaRequestComment = $this->input->post('customer_comments');
            
            $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
            $message .= '<html xmlns="http://www.w3.org/1999/xhtml">';
            $message .= '<head>';
                $message .= '<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />';
                $message .= '<title>Verify RMA/Claim request information Form</title>';
                $message .= '<style style="text/css">';
                $message .= 'body {margin: 0 auto; padding: 0; min-width: 1200px !important;}';
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
                            $message .= '<th>Reference Number</th>';
                            $message .= '<th>Request Date</th>';
                            $message .= '<th>Customer Name</th>';
                            $message .= '<th>Customer Email</th>';
                            $message .= '<th>Marketplace Name</th>';
                            $message .= '<th>Order Number</th>';
                            $message .= '<th>Return Type</th>';
                            $message .= '<th>SKU</th>';
                            $message .= '<th>Product Name</th>';
                            $message .= '<th>Quantity</th>';
                            $message .= '<th>Customer Comments</th>';
                        $message .= '</tr>';
                    $message .= '</thead>';
                    $message .= '<tbody>';
                        $message .= '<tr>';
                            $message .= '<td>'."$rmaReferenceNumber".'</td>';
                            $message .= '<td>'."$rmaRequestDate".'</td>';
                            $message .= '<td>'."$rmaRequestName".'</td>';
                            $message .= '<td>'."$rmaRequestEmail".'</td>';
                            $message .= '<td>'."$rmaRequestMarketplace".'</td>';
                            $message .= '<td>'."$rmaRequestOrderNumber".'</td>';
                            $message .= '<td>'."$rmaRequestReturnType".'</td>';
                            $message .= '<td>'."$rmaRequestSku".'</td>';
                            $message .= '<td>'."$rmaRequestProductName".'</td>';
                            $message .= '<td>'."$rmaRequestQty".'</td>';
                            $message .= '<td>'."$rmaRequestComment".'</td>';
                        $message .= '</tr>';
                    $message .= '</tbody>';
                $message .= '</table>';
            $message .= '</body>';
            $message .= '</html>';
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('yosefoberlander99@gmail.com');
            $this->email->to($supportEmailAddress);
            $this->email->subject('TechWise Direct RMA/Claim Request Information');
            $this->email->message($message);
            $this->email->send();
        }

        public function rma_authorization_form_values() {

        }
    }