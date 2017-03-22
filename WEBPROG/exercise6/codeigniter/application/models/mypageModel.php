<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypageModel extends CI_Model {


        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->database();
        }

        public function save_button_pressed(){
          $query = $this->db->get('users');
          $data = $query->result();

          $this->db->insert('users', $data);


        }

        public function show_data_in_visitorspage(){
          $query = $this->db->get('users');


        }

}
?>
