<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendingReqA extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
        $this->load->library('session');
        //$this->load->library('form_validation');

       $this->load->model('PendingReqAModel');
       $this->load->model('GetCountModel');
    //	if(empty($this->session->userdata("Id")))
      //      redirect(site_url('Login'),'refresh');
    }


	public function index()
	{

        
           

            $data['composeActive'] = "#";
            $data['sentReqActiveA'] = "#";
            $data['pendReqA'] = "active";
            $data['declinedA'] = "#";
            $data['subcategories'] = "#";
            $data['declinedReqM'] = "#";
            $data['approvedReqM'] = "#";
            $data['unreviewedReqM'] = "#";
            $data['sites'] = "#";
            $data['approvedA'] = "#";

           $this->GetCountModel->getAllCount($this->session->userdata("userID"));                                                                                     

           $pendReqs =  $this->PendingReqAModel->getpendRequests($this->session->userdata("userID"));

           
           //var_dump($sentReqs[0]);


           $data2['Reqs'] = $pendReqs;
           



          $data['Menu']  = $this->load->view("PendReqA", $data2,TRUE);
          $this->load->view('MainManager',$data);
    
}
 function getReqCount(){

$id = $this->session->userdata("userID");
$temp = $this->SentReqAModel->getReqCount($id);

$_GET['sentCountA'] = $temp[0]['count(senderID)'];

}
      } 
        
	

