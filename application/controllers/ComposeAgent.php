<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComposeAgent extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->model('ComposeModel');
        $this->load->model('GetCountModel');
    //	if(empty($this->session->userdata("Id")))
      //      redirect(site_url('Login'),'refresh');
    }
	public function index()
	{
        

        //$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        
//echo $_SESSION['User'];
  
         if ($this->form_validation->run() == FALSE)
        {             
           

            $data['composeActive'] = "active";
            $data['sentReqActiveA'] = "#";
            $data['pendReqA'] = "#";
            $data['declinedA'] = "#";
            $data['subcategories'] = "#";
            $data['declinedReqM'] = "#";
            $data['approvedReqM'] = "#";
            $data['unreviewedReqM'] = "#";
            $data['sites'] = "#";
            $data['approvedA'] = "#";
                                                                                                                 

 $this->GetCountModel->getAllCount($this->session->userdata("userID"));                                                                                     

          $data1['Site']  = $this->ComposeModel->getSites();
            
        //  $data1['DateTimePicker'] = $this->load->view("DateTimePicker", NULL,TRUE);
           $data['Menu']  = $this->load->view("compose", $data1, TRUE);
           $this->load->view('AgentManager',$data);
           //$this->load->view('ComposeManager2');
        }
        else
        {
      
//  echo "kir";    
        $site = $this->input->post('site');
        $startTime = $this->input->post('StartTime');
        $endTime = $this->input->post('EndTime');
        
        $title = $this->input->post('title');

        $content = $this->input->post('content');
  //      echo $userName;
        

      $this->ComposeModel->insert($site,$title,$content,$endTime,$startTime);
//var_dump($_POST);       // redirect('debug.php');
       // echo "succed";


      }  
        
	}
}
