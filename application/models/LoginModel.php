<?php

class LoginModel extends CI_Model{


public function __construct() 
    {       
         parent:: __construct();
         $this->load->database();
          
    }
function Login($userName,$pass){  
    
    $pass = $pass;
    
    $this->db->select('Username,Password,UserID,Role,FullName,Email,ParentID');    
    $this->db->where('Username',$userName);
    $this->db->where('Password',$pass);
    $query = $this->db->get('user');
    
    if($query->num_rows() == 1 ){
        $temp = $query->result_array() ;        
        $data = array();
        $data['username'] = $temp[0]['Username'];
        $data['password'] = $temp[0]['Password'];
        $data['userID'] = $temp[0]['UserID'];
        $data['role'] = $temp[0]['Role'];
        $data['Name'] = $temp[0]['FullName'];
        $data['Eamil'] = $temp[0]['Email'];
        $data['ParentID'] = $temp[0]['ParentID'];
        
        return $data;
        
        
        

        //echo "success";
    }
    else return false;
    
}


}

?>
