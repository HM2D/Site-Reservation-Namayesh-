<?php

class SubcategoriesModel extends CI_Model{


public function __construct() 
    {       
         parent:: __construct();
         $this->load->database();
          
    }
function getRoles(){
 $this->db->select('*');    
    
    
    
     $query = $this->db->get('Role');
      $temp = $query->result_array();


       return $temp;        





}

function getSubcategories($myID){

     $this->db->select('*');    
    
    $this->db->where('ParentID',$myID);
    $this->db->where('UserID <>', $myID);
     $query = $this->db->get('userwithrole');

        $temp = $query->result_array();


       return $temp;        

}

}

?>
