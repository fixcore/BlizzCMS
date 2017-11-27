<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends MX_Controller {
	
	public function index()
	{
		$this->load->model('forum_model');

		$this->load->view('index');
		$this->load->view('footer');
	}

	public function category($id)
	{
		if(empty($id) || is_null($id))
			redirect(base_url('forum'),'refresh');

		$this->load->model('forum_model');

		$data['idlink'] = $id;

		$this->load->view('category', $data);
		$this->load->view('footer');
	}

	public function topic($id)
	{
		if(empty($id) || is_null($id))
			redirect(base_url('forum'),'refresh');

		$this->load->model('forum_model');

		$data['idlink'] = $id;

		$this->load->view('topic', $data);
		$this->load->view('footer');
	}

}
