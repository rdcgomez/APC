<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypagecheckdatabase extends CI_Controller {

    public function __construct() {
      parent:: __construct();
      $this->load->helper('url');
      $this->load->helper('array');
      $this->load->model("mypageModel");
    }


    public function index(){


      // Show submitted data in visitors database
      //pass the data
      $query = $this->db->get('users');
      foreach ($query->result() as $row)
        {
          $row;
        }



      //load view
      $this->load->view("my_page_checkdatabase", $row);

    }


}
?>
