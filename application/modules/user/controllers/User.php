<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {
	
	public function login()
	{
		if ($this->m_data->isLogged())
			redirect(base_url(),'refresh');
		
		if ($this->m_general->getExpansionAction() == 1)
			$this->load->view('login1');
		else
			$this->load->view('login2');

		$this->load->view('footer');
	}

	public function register()
	{
		if ($this->m_data->isLogged())
			redirect(base_url(),'refresh');
		
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function logout()
	{
		$this->m_data->logout();
	}

	public function settings()
	{
		if (!$this->m_data->isLogged())
			redirect(base_url(),'refresh');

		$this->load->model('user_model');
		
		$this->load->view('settings');
		$this->load->view('footer');
	}
}