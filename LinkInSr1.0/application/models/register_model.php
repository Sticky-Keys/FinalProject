<?php
class Register_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_all_users()
	{

		$query = $this->db->get('user');
		return $query->result_array();
		
	}
	
	public function set_logininfo()
	{
		$this->load->helper('url');

// 		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'username' => $this->input->post('username'),
// 			'slug' => $slug,
			'pword' => $this->input->post('pword')
		);

		return $this->db->insert('user', $data);
	}
	
	public function submit_userprofile()
	{
		$this->load->helper('url');

		$data = array(
			'username' => $this->input->post('username'),
			'pword' => $this->input->post('pword'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'phone_number' => $this->input->post('phone_number')
		);
	
		return $this->db->insert('user', $data);
	}
}