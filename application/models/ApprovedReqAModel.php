<?php

class ApprovedReqAModel extends CI_Model{


public function __construct() 
    {       
         parent:: __construct();
         $this->load->database();
          
    }

function getApprovedRequests($senderID){

     $this->db->select('*');    
    $this->db->where('senderID',$senderID);
    $this->db->where('Status',2);
     $this->db->from('fullrequest');
    $this->db->join('site', 'fullrequest.siteID = site.idsite');
     $query = $this->db->get(); 
     if($query->num_rows() > 0 ){
        $temp = $query->result_array();


       return $temp;        
    
    }
}

}

?>
