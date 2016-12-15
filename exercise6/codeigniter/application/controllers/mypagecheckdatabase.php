<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypagecheckdatabase extends CI_Controller {
    public function index(){
    //load view and pass the data
    $data = array(
    '$first_name' => $this->input->post('first_name'),
    '$last_name' => $this->input->post('last_name')
    );
    // Show submitted data in visitors database
    $this->load->view("my_page_checkdatabase", $data);
    }


}
