<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function test()
	{
		if ($this->m_data->isLogged())
			echo "true";
		else
			echo "false";
	}
}
