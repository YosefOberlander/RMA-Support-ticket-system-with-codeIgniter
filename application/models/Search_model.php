<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Search_model extends CI_Model {

        public function get_results($rmaReferenceNumber='default') {

            // Use the Active Records class for safer queries.
            $this->db->select('*');
            $this->db->from('request_rma_form');
            $this->db->where('reference_number',$rmaReferenceNumber);

            // Execute the search query.
            $query = $this->db->get();

            // Return the results.
            return $query->result_array();
        }
    }