<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypageModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
        }

        public function save_button_pressed(){
          $query = $this->db->query('SELECT * FROM users');
          return $query->result();
        }

        public function show_data_in_visitorspage(){
          $query = $this->db->query('SELECT * FROM users');
          return $query->result();

        }

}
?>
