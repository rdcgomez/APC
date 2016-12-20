<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mypageModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
        }

        public function sample(){

        }

}
?>
