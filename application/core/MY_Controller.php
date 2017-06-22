<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class MY_Controller extends CI_Controller
    {
        protected $data = array();
        function __construct()
        {
            parent::__construct();
            $this->data['page_title'];
            $this->data['before_header'];
            $this->data['before_body'];
        }

        protected function render($the_view = NULL, $template = 'master')
        {
            if($template == 'json' || $this->input->is_ajax_request())
            {
                header('content-Type: application/json');
                echo json_encode($this->data);
            }
            else
            {
                $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);;
                $this->load->view('templates/'.$template.'_view', $this->data);
            }
        }
    }

    class Admin_Controller extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->data['page_title'] = 'TechWise - Dashboard';
        }

        protected function render($the_view = NULL, $template = 'admin_master')
        {
            parent::render($the_view, $template);
        }
    }

    class Public_Controller extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
        }
    }