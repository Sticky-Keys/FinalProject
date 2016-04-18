<?php

Class Menubar_controller extends CI_Controller {
	
		public function menubar() {
			$this->load->library('javascript');			
			$this->load->view('menubar');
			
		}
		
		public function goToLoginTrans() {
			
			$this->load->view('menubar');
			$this->load->view('loginTrans');
		}	
}

?>