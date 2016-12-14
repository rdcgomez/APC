<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypagecheckdatabase extends CI_Controller {
    public function index()
    {

    //load view and pass the data
    $this->load->view('my_page_checkdatabase');

    }
}
