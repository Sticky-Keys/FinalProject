<?php
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->helper('url_helper');

	}
	
	public function authenticate()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Login';
// 		$data['user']  = $this->login_model->authenticateUser();
	
		$this->form_validation->set_rules('username', 'Username', 'matches[username]');
		$this->form_validation->set_rules('pword', 'Password', 'matches[pword]');	
	
		if ($this->form_validation->run() === FALSE)
		{
// 			$this->load->view('templates/header', $data);
			$this->load->view('menubar');
 			$this->load->view('login/authenticate', $data);
			$this->load->view('templates/footer');

		}
		else
		{
// 			$this->login_model->set_userinfo();
			$this->load->view('menubar');
			$this->load->view('login/success');
			$this->load->view('home/portfolio');
		}
	}
}