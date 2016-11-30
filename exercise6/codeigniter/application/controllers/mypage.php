<!--ADDING DATA-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index()
    {
        //load model
        $this->load->model('mypage_model');
        
        //get data from the database
        $data['images'] = $this->mypage_model->get_images();
        
        //load view and pass the data
        $this->load->view('my_page', $data);
    }
}