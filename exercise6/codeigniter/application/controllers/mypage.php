<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypage extends CI_Controller {
    public function index()
    {

    //load model
		$this->load->model('mypage_model');

    //get data from the database
    $data['sql_query'] = $this->mypage_model->dbtuts();

    //load view and pass the data
    $this->load->view('my_page');

    }
}
