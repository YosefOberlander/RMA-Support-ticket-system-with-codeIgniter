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

        public function get_rma_number_results($rmaNumber='default') {

            // Use the Active Records class for safer queries.
            $this->db->select('*');
            $this->db->from('request_rma_form');
            $this->db->where('rma_number',$rmaNumber);

            // Execute the search query.
            $query = $this->db->get();

            // Return the results.
            return $query->result_array();
        }

        public function execute_claim_search($claimNumber='default') {

            // Use the Active Records class for safer queries.
            $this->db->select('*');
            $this->db->from('request_claim_form');
            $this->db->where('claim_number',$claimNumber);

            // Execute the search query.
            $query = $this->db->get();

            // Return the results.
            return $query->result_array();
        }

        public function get_refund_results($refundNumber='default') {

            // Use the Active Records class for safer queries.
            $this->db->select('*');
            $this->db->from('request_rma_form');
            $this->db->where('refund_number',$refundNumber);

            // Execute the search query.
            $query = $this->db->get();

            // Return the results.
            return $query->result_array();
        }
    }

