<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypagecheckdatabase extends CI_Controller {

    public function __construct() {
      parent:: __construct();
      $this->load->helper('url');
      $this->load->helper('array');
    }


    public function index(){


      // Show submitted data in visitors database
      $this->load->model("mypageModel");
      //pass the data
      $data ['query'] = $this->load->show_data_in_visitorspage();




      //load view
      $this->load->view("my_page_checkdatabase", $data);

    }


}
?>
