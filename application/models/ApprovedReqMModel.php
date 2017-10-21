<?php

class ApprovedReqMModel extends CI_Model{


public function __construct() 
    {       
         parent:: __construct();
         $this->load->database();
          
    }

function getApprovedRequests($senderID){

     $this->db->select('*');    
    $this->db->where('recieverID',$senderID);
    $this->db->where('Status',2);
     $query = $this->db->get('fullrequest');
     if($query->num_rows() > 0 ){
        $temp = $query->result_array();


       return $temp;        
    
    }
}

}

?>
