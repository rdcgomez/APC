<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypage extends CI_Controller {

    public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    }
  

    public function index(){

    $this->load->model('mypage_add');
    //load view and pass the data
    $this->load->view('my_page');


  }
}
