<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypagecheckdatabase extends CI_Controller {
    public function index()
    {

		$this->load->model('mypage_add');
    $data['sql_query'] = $this->mypageadd->dbtuts();
    //load view and pass the data
    $this->load->view('my_page_checkdatabase', $data);

    }
}
