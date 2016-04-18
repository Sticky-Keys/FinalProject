<?php
class Login_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getAllUserCreds()
	{
		$this->db->select('username, pword');
		$query = $this->db->get('user');
		return $query->result_array();
	}
	
/*	public function authenticateUser() 
	{
		$username	= $POST['username'];
// 		$pword	= $POST['pword'];
		
		$this->db->select('username');
		$this->db->where('username', $username);
		$query = $this->db->get('user');
		return $query->result_array();
	}*/
}