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
          $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'user_city' => $user_city,
            'email_address' => $email,
            'contact_number' => $contact_number,
            'url_website' => $url_website,
            'gender' => $gender

          );

          $this->db->insert('users', $data)


        }

        public function show_data_in_visitorspage(){
          $query = $this->db->query('SELECT * FROM users');

        }

}
?>
