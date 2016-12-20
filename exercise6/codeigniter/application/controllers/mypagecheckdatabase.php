<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypagecheckdatabase extends CI_Controller {

    public function __construct() {
    parent:: __construct();
    $this->load->helper('url');
  }


    public function index(){
      //load view and pass the data

      // dito ka mag query
      ['first_name']    => $this->db->get['first_name'];
      ['last_name']			=> $_POST['last_name'];
  	  ['user_city	']		=> $_POST['user_city'];
  		['email']	        => $_POST['email_address'];
      ['contact_number']=> $_POST['contact_number'];
  		['url_website']		=> $_POST['url_website'];
  		['gender'] 				=> $_POST['gender'];


      // Show submitted data in visitors database
      $this->load->view("my_page_checkdatabase", $row);


    }


}
