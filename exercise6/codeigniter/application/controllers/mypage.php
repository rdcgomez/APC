<!--ADDING DATA-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypage extends CI_Controller {
    public function index()
    {
		
		
		$this->load->helper('url'); 
        //load view and pass the data
        $this->load->view('my_page');
		
    }
}