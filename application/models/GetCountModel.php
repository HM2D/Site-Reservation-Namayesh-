<?php

class GetCountModel extends CI_Model{


public function __construct() 
    {       
         parent:: __construct();
         $this->load->database();
          
    }



public function getReqPendingMCount($id){

$this->db->select('count(senderID)');    
    $this->db->where('recieverID',$id);
    $this->db->where('Status',0);
     $query = $this->db->get('fullrequest');
    $temp = $query->result_array();

    $_GET['ReqUnreviewedMCount'] = $temp[0]['count(senderID)'];




}
public function getReqPendingACount($id){

$this->db->select('count(senderID)');    
    $this->db->where('senderID',$id);
    $this->db->where('Status',0);
     $query = $this->db->get('fullrequest');
    $temp = $query->result_array();

    $_GET['ReqPendingACount'] = $temp[0]['count(senderID)'];




}

public function getReqSentACount($id){


$this->db->select('count(senderID)');    
    $this->db->where('senderID',$id);
     $query = $this->db->get('fullrequest');
    $temp = $query->result_array();

    $_GET['ReqSentACount'] = $temp[0]['count(senderID)'];


}
public function getReqDeclinedACount($id){

$this->db->select('count(senderID)');    
    $this->db->where('senderID',$id);
    $this->db->where('Status',1);
     $query = $this->db->get('fullrequest');
    $temp = $query->result_array();

    $_GET['ReqDeclinedACount'] = $temp[0]['count(senderID)'];





}
public function getReqApprovedACount($id){

$this->db->select('count(senderID)');    
    $this->db->where('senderID',$id);
    $this->db->where('Status',2);
     $query = $this->db->get('fullrequest');
    $temp = $query->result_array();

    $_GET['ReqApprovedACount'] = $temp[0]['count(senderID)'];





}
public function getReqApprovedMCount($id){

$this->db->select('count(senderID)');    
    $this->db->where('recieverID',$id);
    $this->db->where('Status',2);
     $query = $this->db->get('fullrequest');
    $temp = $query->result_array();

    $_GET['ReqApprovedMCount'] = $temp[0]['count(senderID)'];





}
public function getReqDeclinedMCount($id){

$this->db->select('count(senderID)');    
    $this->db->where('recieverID',$id);
    $this->db->where('Status',1);
     $query = $this->db->get('fullrequest');
    $temp = $query->result_array();

    $_GET['ReqDeclinedMCount'] = $temp[0]['count(senderID)'];





}

function getAllCount($id){

$this->getReqDeclinedMCount($id);
$this->getReqSentACount($id);
$this->getReqPendingACount($id);
$this->getReqPendingMCount($id);
$this->getReqDeclinedACount($id);
$this->getReqApprovedMCount($id);
$this->getReqApprovedACount($id);
}

}

?>
