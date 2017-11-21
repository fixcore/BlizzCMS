<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	
	public function index()
	{
		$this->load->view('news/news');
		$this->load->view('footer');
	}

	public function post($id)
	{
		if ($this->m_general->getNewSpecifyID($id)->num_rows() < 1)
			redirect(base_url(),'refresh');

		$data['idlink'] = $id;

		$this->load->view('news/post', $data);
		$this->load->view('footer');
	}

}