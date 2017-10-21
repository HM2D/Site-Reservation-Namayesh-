<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('LoginModel');
    }
	public function index()
	{
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

       if ($this->form_validation->run() == FALSE)
        {           

           $this->load->view('Login');
        }
        else
        {
            $userName = $this->input->post('username');
            $pass = $this->input->post('password');
                //echo $pass;
                $data = $this->LoginModel->login($userName,$pass);
            
                //echo "success";
               // $this->session->mark_as_temp($data, 2000);//expires in 15 minuetes
        if(!$data){
            $msg['Failed'] = "Username or password doesn't match or username doesn't exist!"; 
            $this->load->view('Login',$msg);

        }else{
             $this->session->set_userdata($data); //email and id will be saved in session
               
        if($data['role'] == 5)
                redirect('/Agent');
            else redirect('/PendingReqA');
                
                    }
                }
		
	   
        
    }
    public function logout(){

        
        session_destroy();
        redirect('/Login');


    }
}
