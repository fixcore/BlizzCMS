<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function login()
	{
		if ($this->m_data->isLogged())
			redirect(base_url(),'refresh');
		
		if ($this->m_general->getExpansionAction() == 1)
			$this->load->view('login/login1');
		else
			$this->load->view('login/login2');

		$this->load->view('footer');
	}

	public function register()
	{
		if ($this->m_data->isLogged())
			redirect(base_url(),'refresh');
		
		$this->load->view('register/register');
		$this->load->view('footer');
	}

	public function logout()
	{
		$this->m_data->logout();
	}
}