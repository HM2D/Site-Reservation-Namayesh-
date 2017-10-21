<?php

class ResetPassModel extends CI_Model{


public function __construct() 
    {       
         parent:: __construct();
         $this->load->database();          
    }
function UserVerify($userName,$email){   
    
    $this->db->select('*');    
    $this->db->where('Username',$userName);
    $this->db->where('Email',$email);
    $query = $this->db->get('user');
    $temp = $query->result_array() ;
    
    if($query->num_rows() == 1 ) 
        return $temp[0]; //user already exists    
    else return false;
    
}
function ResetPass($UserData){   
    $this->load->helper('string');
    $newPassword = random_string('alnum', 10);
    $newPasswordHash = $newPassword;
    
    $data = array('Password' => $newPasswordHash);
    $this->db->where('UserID',$UserData['UserID']);
    $this->db->update('user',$data);


    if($this->db->affected_rows()){
    
    //Sending Email to User
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
           

        $this->email->from('ali.delkhosh.safrabaste@gmail.com', 'Password Reset');
        $this->email->to($UserData['Email']); 


        $this->email->subject('your password has been changed');

        $this->email->message("Your New password : ".$newPassword);

        if($this->email->send())
              return true ;
        else {//recover old password in database
            
             $data = array('Password' => $UserData['Password']);
             $this->db->where('userID',$UserData['UserID']);
             $this->db->update('user',$data);
            
             while($this->db->affected_rows() != 1){        //Force password recovery mechanisim
             
                 $data = array('Password' => $UserData['Password']);
                 $this->db->where('UserID',$UserData['UserID']);
                 $this->db->update('user',$data);
             }
            return false;
        }
    }
    else return false ;


}
}

?>
