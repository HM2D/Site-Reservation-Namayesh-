<?php

class ActionModel extends CI_Model{


public function __construct() 
    {       
         parent:: __construct();
         $this->load->database();
          
    }


function DeclineReq($id){



        $data2 =  array('Status' =>  1);
        $this->db->where('idRequests',$id);
        $this->db->update('Request',$data2);


}



function ApproveReq($userID,$startTime,$endTime,$siteID,$requestID){

 $data = array(
        'site' => $siteID,
        'StartTime' => $startTime,
        'EndTime' => $endTime,
        'By' => $userID, 
       );
   $query =  $this->db->insert('Schedule',$data);

   $data2 =  array('Status' =>  2);

  
        $this->db->where('idRequests',$requestID);
        $this->db->update('Request',$data2);








}


function giveSite($idSite,$idUser){
echo $idUser;
   $data = array(
        'Site' => $idSite,
        'Owner' => $idUser, 
       );
   $query =  $this->db->insert('SiteOwnership',$data);
   
$data2=array('LastOwner'=>$idUser);

        $this->db->where('idSite',$idSite);
        $this->db->update('Site',$data2);



}


function DeleteSubcategory($id){


   $this->db->where('UserId', $id);
   $this->db->delete('User');




}


function AddUser($fullName,$Email,$username,$password,$role,$parentID){

//id = $this->getIDOfSiteOwner($site);


    $data = array(
        'FullName' => $fullName,
        'Email' => $Email ,
        'Username' => $username,
        'Password' => $password,
        'Role' => $role,
        'ParentID' => $parentID,
        'Type' => 0

       );
   $query =  $this->db->insert('User',$data);
    
if($query == 1) {
   //data inserted
 return 1; 
 
} else {
    return 0;
   //email exists already
}



}
function DeleteApprovedReqM($id){


echo $id;
   $this->db->where('idRequests', $id);
   $this->db->delete('Request');


}

}

?>
