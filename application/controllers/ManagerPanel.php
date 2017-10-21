<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerPanel extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('url');
        
        $this->load->library('session');
        $this->load->model('LoginModel');
    	if(empty($this->session->userdata("Id")))
            redirect(site_url('/index.php/Login'),'refresh');
    }
	public function index()
	{
        
		
        
	}
}
