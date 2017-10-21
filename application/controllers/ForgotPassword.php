<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('ResetPassModel');
    }
	public function index()
	{
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {             
           $this->load->view('forgotPasswordView2');
        }
        else
        {
            $userName = $this->input->post('username');
            $email = $this->input->post('email');
            
            $isUserVerified = $this->ResetPassModel->UserVerify($userName,$email);
            
            if($isUserVerified){
                $UserData = $isUserVerified ;
                $ResetStatus = $this->ResetPassModel->ResetPass($UserData);
                if($ResetStatus){
                    $data['Msg'] = 'New password has been sent to your Email succussfully.';
                    $this->load->view('forgotPasswordView2',$data);                    
                }
                else{
                    $data['Failed'] = 'Reset password failed because of some problems(s).please try later.';
                    $this->load->view('forgotPasswordView2',$data); 
                }
            }
            else{
                $data['Failed'] = "Username and Email dosen't match or dosen't exist.";
                $this->load->view('forgotPasswordView2',$data);
                
            }
            
        }
		
	}
}
