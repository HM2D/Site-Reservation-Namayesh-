<?php

class SentReqAModel extends CI_Model{


public function __construct() 
    {       
         parent:: __construct();
         $this->load->database();
          
    }
function getReqCount($id){


$this->db->select('count(senderID)');    
    $this->db->where('RecieverID',$id);
     $query = $this->db->get('fullrequest');
    $temp = $query->result_array();
    return $temp;


}
function getName($ReciverID){

 $this->db->select('*');    
    $this->db->where('RecieverID',$senderID);
     $query = $this->db->get('Request');
      $temp = $query->result_array();
      


}

function getSentRequests($senderID){
$this->db->select('*');    
    $this->db->where('senderID',$senderID);
    
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
