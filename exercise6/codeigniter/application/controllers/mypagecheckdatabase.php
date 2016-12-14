<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypagecheckdatabase extends CI_Controller {
    public function index()
    {

		$this->load->model('mypage_add');
    
    //load view and pass the data
    $this->load->view('my_page_checkdatabase');

    }
}
