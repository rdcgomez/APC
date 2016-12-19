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
      $data = array(
        'title' => 'My title',
        'name' => 'My Name',
        'date' => 'My date');

      // tapos pasa mo sa view
      // Show submitted data in visitors database
      $this->load->view("my_page_checkdatabase");


    }


}
