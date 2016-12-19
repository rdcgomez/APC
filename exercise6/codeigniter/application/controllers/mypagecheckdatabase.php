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
      $data ['first_name']    => $_POST['first_name'];
      $data ['last_name']			=> $_POST['last_name'];
  		$data ['user_city	']		=> $_POST['user_city'];
  		$data ['email']	        => $_POST['email_address'];
  		$data ['contact_number']=> $_POST['contact_number'];
  		$data ['url_website']		=> $_POST['url_website'];
  		$data ['gender'] 				=> $_POST['gender'];

      // Show submitted data in visitors database
      $this->load->view("my_page_checkdatabase", $data);


    }


}
