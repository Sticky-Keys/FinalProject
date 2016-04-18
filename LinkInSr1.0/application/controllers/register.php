<?php
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
		$this->load->helper('url_helper');

	}

	public function index()
	{
		$data['user'] = $this->register_model->get_all_users();
		$data['title'] = 'User names already taken';

// 		$this->load->view('templates/header', $data);
		$this->load->view('menubar');
		$this->load->view('register/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a New User Account';
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pword', 'Password', 'required');

		/*$this->form_validation->set_rules('username', 'New_User_Entered_Username01',
        'required|min_length[5]|max_length[30]|is_unique[user.username]',
        	array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        	)
		);
		$this->form_validation->set_rules('pword', 'New_User_Entered_Password', 
		'required|min_length[5]|max_length[16]|',
			array(
				'required'		=> 'You have not provided %s.'
			)	
		);*/

		if ($this->form_validation->run() === FALSE)
		{
// 			$this->load->view('templates/header', $data);
			$this->load->view('menubar');
 			$this->load->view('register/create', $data);
			$this->load->view('templates/footer');

		}
		else
		{
//			notify user of approved login credentials and prompt for rest of user information			
// 			$this->register_model->set_logininfo();
			$this->load->view('menubar');
			$this->load->view('register/success');
			$this->load->view('register/userprofile_form');
		}
	}
	
	public function userprofile_form()
	{
// 		$this->load->helper('form');
// 		$this->load->library('form_validation');
		
/*		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('menubar');
			$this->load->view('register/userprofile_form');
		}
		else
		{*/
			$this->register_model->submit_userprofile();
			$this->load->view('menubar');
			$this->load->view('register/acknowledge');
			$this->load->view('home/portfolio');
// 		}
	}
}