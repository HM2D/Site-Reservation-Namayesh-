<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActionController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('ActionModel');
    //	if(empty($this->session->userdata("Id")))
      //      redirect(site_url('Login'),'refresh');
    }

 public function DeclineReq($returnUrl){
    $requestID = $this->input->post("DeclineButton");

    $this->ActionModel->DeclineReq($requestID);

    redirect(base64_decode($returnUrl));




 }

public function ApproveReq($returnUrl){
 
    $temp  = $this->input->post("ApproveButton");
    $split = explode("/", $temp);
    $userID = $split[0];
    $starttime = $split[1];
    $endtime = $split[2];
    $siteID = $split[3];
    $requestID = $split[4];
    $this->ActionModel->ApproveReq($userID,$starttime,$endtime,$siteID,$requestID);

redirect(base64_decode($returnUrl));


}


public function giveSite($returnUrl){
$idSite = $this->input->post("addSubButton");
 $idUser = $this->input->post("idOfUser");

$this->ActionModel->giveSite($idSite,$idUser); 

redirect(base64_decode($returnUrl));





}


    public function send_Email($Email,$fullName,$role)
  {
    
    while(true){
    $temp = explode(" ",$fullName);
    $username = $temp[0].$temp[1].rand(0,999);
    $password = rand();


    
    $insert = $this->ActionModel->AddUser($fullName,$Email,$username,$password,$role,$this->session->userdata("userID"));
if($insert == 0){

continue;

}else break;
  }
    $config = Array(        
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'ali.delkhosh.safrabaste@gmail.com',
            'smtp_pass' => '10006016',
            'smtp_timeout' => '4',
            'mailtype'  => 'text', 
            'charset'   => 'iso-8859-1'
        );
 
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
           

            $this->email->from('ali.delkhosh.safrabaste@gmail.com', 'MailTest');
            $this->email->to($Email); 


            $this->email->subject('Your UserName And Password For Namayesh');

      $message= /*-----------email body starts-----------*/
        'Thanks for signing up, '.$fullName.'!
      
        Your account has been created. 
        Here are your login details.
        -------------------------------------------------
        Email   : ' . $Email . '
        Username : ' . $username . '
        Password: ' . $password . '
        -------------------------------------------------
                        
        
            
        ' ;
    /*-----------email body ends-----------*/ 
            $this->email->message($message);  
          if($this->email->send())
             
              redirect(base64_decode($returnUrl));

}

public function CreateUser($returnUrl){

    $email = $this->input->post("Email");
    $fullName = $this->input->post("FullName");
    $role = $this->input->post("Role");
    $this->send_Email($email,$fullName,$role);



}

public function DeleteSubcategory($returnUrl){
    $idToDelete = $this->input->post('deleteButton');

    $this->ActionModel->DeleteSubcategory($idToDelete);

redirect(base64_decode($returnUrl));


}

public function DeleteSentReqA($returnUrl){


  $idToDelete = $this->input->post('deleteButton');    
    
    //echo $idToDelete;
    //echo "fuck tou";
  
    $this->ActionModel->DeleteApprovedReqM($idToDelete);
    //redirect($returnUrl);
    redirect(base64_decode($returnUrl));


}

  public function DeleteApprovedReqM($returnUrl){
    //echo "hello";
    $idToDelete = $this->input->post('deleteButton');    
    
    //echo $idToDelete;
    //echo "fuck tou";
    $this->ActionModel->DeleteApprovedReqM($idToDelete);
    //redirect($returnUrl);
    redirect(base64_decode($returnUrl));


  }  
	public function index()
	{

       
      }  
        
	}

