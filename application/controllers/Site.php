<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
        $this->load->library('session');
        //$this->load->library('form_validation');

       $this->load->model('SiteModel');
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
            $data['unreviewedReqM'] = "#";
            $data['sites'] = "active";
            $data['approvedA'] = "#";

           $this->GetCountModel->getAllCount($this->session->userdata("userID"));                                                                                     

           $sites =  $this->SiteModel->getSite($this->session->userdata("userID"));
           $siteSchedule = $this->SiteModel->getSchedule();
           $subcategories = $this->SiteModel->getSubcategories($this->session->userdata("userID"));
         //  var_dump($unrevReqs[0]);
           
           //var_dump($sentReqs[0]);

           $data2['siteSchedule'] = $siteSchedule;
           $data2['Reqs'] = $sites;
           $data2['Subcategories'] = $subcategories;



          $data['Menu']  = $this->load->view("Site", $data2,TRUE);
          $this->load->view('MainManager',$data);
    
}

      } 
        
	

