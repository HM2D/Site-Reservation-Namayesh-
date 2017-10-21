<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeclinedReqAAgent extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
        $this->load->library('session');
        //$this->load->library('form_validation');

       $this->load->model('DeclinedReqAModel');
       $this->load->model('GetCountModel');
    //	if(empty($this->session->userdata("Id")))
      //      redirect(site_url('Login'),'refresh');
    }


	public function index()
	{

        
           

            $data['composeActive'] = "#";
            $data['sentReqActiveA'] = "#";
            $data['pendReqA'] = "#";
            $data['declinedA'] = "active";
            $data['subcategories'] = "#";
            $data['declinedReqM'] = "#";
            $data['approvedReqM'] = "#";
            $data['unreviewedReqM'] = "#";
            $data['sites'] = "#";
            $data['approvedA'] = "#";

           $this->GetCountModel->getAllCount($this->session->userdata("userID"));                                                                                     

           $decReqs =  $this->DeclinedReqAModel->getDeclinedRequests($this->session->userdata("userID"));

           
           //var_dump($sentReqs[0]);


           $data2['Reqs'] = $decReqs;
           



          $data['Menu']  = $this->load->view("DecReqA", $data2,TRUE);
          $this->load->view('AgentManager',$data);
    
}

      } 
        
	

