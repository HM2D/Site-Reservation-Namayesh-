<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnreviewedReqM extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
        $this->load->library('session');
        //$this->load->library('form_validation');

       $this->load->model('UnreviewedReqMModel');
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
            $data['approvedReqM'] = "#";
            $data['unreviewedReqM'] = "active";
            $data['sites'] = "#";
            $data['approvedA'] = "#";

           $this->GetCountModel->getAllCount($this->session->userdata("userID"));                                                                                     

           $unrevReqs =  $this->UnreviewedReqMModel->getUnreviewedRequests($this->session->userdata("userID"));


         //  var_dump($unrevReqs[0]);
           
           //var_dump($sentReqs[0]);


           $data2['Reqs'] = $unrevReqs;
           



          $data['Menu']  = $this->load->view("UnrevReqM", $data2,TRUE);
          $this->load->view('MainManager',$data);
    
}

      } 
        
	

