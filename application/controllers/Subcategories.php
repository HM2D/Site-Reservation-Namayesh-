<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategories extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
        $this->load->library('session');
        //$this->load->library('form_validation');

       $this->load->model('SubcategoriesModel');
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
            $data['subcategories'] = "active";
            $data['declinedReqM'] = "#";
            $data['approvedReqM'] = "#";
            $data['unreviewedReqM'] = "#";
            $data['sites'] = "#";
            $data['approvedA'] = "#";


           $this->GetCountModel->getAllCount($this->session->userdata("userID"));                                                                                     
           $Roles = $this->SubcategoriesModel->getRoles();
           $Subcategories =  $this->SubcategoriesModel->getSubcategories($this->session->userdata("userID"));

           
           //var_dump($sentReqs[0]);

           $data2['Roles'] = $Roles;
           $data2['Reqs'] = $Subcategories;
           



          $data['Menu']  = $this->load->view("Subcategories", $data2,TRUE);
          $this->load->view('MainManager',$data);
    
}

      } 
        
	

