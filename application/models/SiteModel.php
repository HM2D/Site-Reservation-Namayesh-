<?php

class SiteModel extends CI_Model{


public function __construct() 
    {       
         parent:: __construct();
         $this->load->database();
          
    }

function getSubcategories($myID){

     $this->db->select('*');    
    
    $this->db->where('ParentID',$myID);
    $this->db->where('UserID <>', $myID);
     $query = $this->db->get('userwithrole');

        $temp = $query->result_array();


       return $temp;        

}

function getSchedule(){


 $this->db->select('*');    
    
    $this->db->from('schedulewithname');
    $query = $this->db->get(); 

     if($query->num_rows() > 0 ){
        $temp = $query->result_array();


       return $temp;        
    
    }



}
function getSite($id){


    

	$this->db->select('*');    
    $this->db->where('Owner',$id);
    
    $this->db->from('sitewithowner');
    $query = $this->db->get(); 

     if($query->num_rows() > 0 ){
        $temp = $query->result_array();


       return $temp;        
    
    }
    

    
}
}

?>
