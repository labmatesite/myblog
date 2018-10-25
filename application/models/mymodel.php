<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model{
	function post(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get(); 
		 $res = $query->result_array(); 
  		 return $res; 
	}
}



?>