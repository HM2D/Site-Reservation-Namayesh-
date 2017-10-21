<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApprovedReqM extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
        $this->load->library('session');
        //$this->load->library('form_validation');

       $this->load->model('ApprovedReqMModel');
       $this->load->model('GetCountModel');
    //	if(empty($this->session->userdata("Id")))
      //      redirect(site_url('Login'),'refresh');
    }


	public function index()
	{

        
           

            $data['composeActive'] = "#";
            $data['sentReqActiveA'] = "#";
            $data['pendReqA'] = "#";
            $data['declinedA'] = "#";
            $data['subcategories'] = "#";
            $data['declinedReqM'] = "#";
            $data['approvedReqM'] = "active";
            $data['unreviewedReqM'] = "#";
            $data['sites'] = "#";
            $data['approvedA'] = "#";

           $this->GetCountModel->getAllCount($this->session->userdata("userID"));                                                                                     

           $approvedReqs =  $this->ApprovedReqMModel->getApprovedRequests($this->session->userdata("userID"));

           
           //var_dump($sentReqs[0]);


           $data2['Reqs'] = $approvedReqs;
           



          $data['Menu']  = $this->load->view("ApprovedReqM", $data2,TRUE);
          $this->load->view('MainManager',$data);
    
}

      } 
        
	

