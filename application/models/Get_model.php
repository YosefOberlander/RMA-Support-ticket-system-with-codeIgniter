<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Get_model extends CI_Model {

        public function get_id($id) {

            $this->db->select('*');
            $this->db->from('request_rma_form');
            $this->db->where('id', $id);

            $query = $this->db->get();

            return $query->result_array();
        }
    }