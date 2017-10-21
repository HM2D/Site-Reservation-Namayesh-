<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SentReqA extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
        $this->load->library('session');
        //$this->load->library('form_validation');

       $this->load->model('SentReqAModel');
       $this->load->model('GetCountModel');
    //	if(empty($this->session->userdata("Id")))
      //      redirect(site_url('Login'),'refresh');
    }


	public function index()
	{

        
           

            $data['composeActive'] = "#";
            $data['sentReqActiveA'] = "active";
            $data['pendReqA'] = "#";
            $data['declinedA'] = "#";
            $data['subcategories'] = "#";
            $data['declinedReqM'] = "#";
            $data['approvedReqM'] = "#";
            $data['unreviewedReqM'] = "#";
            $data['sites'] = "#";
            $data['approvedA'] = "#";
            $this->GetCountModel->getAllCount($this->session->userdata("userID"));                                                                                     



           $sentReqs =  $this->SentReqAModel->getSentRequests($this->session->userdata("userID"));
           
           //var_dump($sentReqs[0]);


           $data2['Reqs'] = $sentReqs;
           



          $data['Menu']  = $this->load->view("SentReqA", $data2,TRUE);
          $this->load->view('MainManager',$data);
    
}
 function getReqCount(){

$id = $this->session->userdata("userID");
$temp = $this->SentReqAModel->getReqCount($id);

$_GET['sentCountA'] = $temp[0]['count(senderID)'];

}
      } 
        
	

