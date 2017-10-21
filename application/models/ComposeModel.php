<?php

class ComposeModel extends CI_Model{


public function __construct() 
    {       
         parent:: __construct();
         $this->load->database();
          
    }


function getSites(){

    $this->db->select('*');    
     $query = $this->db->get('Site');
     
        $temp = $query->result_array();
       return $temp;       
    
    





}    
function getIDOfSiteOwner($siteID){

    $this->db->select('LastOwner');
         $this->db->where('idSite',$siteID);

    $query = $this->db->get('Site');
    $temp = $query->result_array();

    return $temp[0]['LastOwner'];
    



}

function insert($site,$title,$content,$endTime,$startTime){

 $id = $this->getIDOfSiteOwner($site);


    $data = array(
        'RecieverID' => $id,
        'SentDateTime' => date('Y-m-d H:i:s') ,
        'Content' => $content ,
        'SenderID' => $this->session->userdata("userID") ,
        'Title' => $title,
        'Status' => 0, // 0 barrasi nashode 1 reject shode 2 accept shode
        'SiteID' => $site,
        'StartTime' => $startTime,
        'EndTime' => $endTime
    );
    $this->db->insert('Request',$data);
    





}
function getID($username){



    $this->db->select('UserID');    
    $this->db->where('Username',$username);
     $query = $this->db->get('User');
     if($query->num_rows() == 1 ){
        $temp = $query->result_array();
       return $temp[0]['UserID'];        
    
    }
}

}

?>
