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

		if ($this->forum_model->getType($id) == 2 && $this->m_data->isLogged())
			if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) {}
		else
			redirect(base_url('forum'),'refresh');

		
			$this->load->view('category', $data);
			$this->load->view('footer');

	}

	public function topic($id)
	{
		$this->load->model('forum_model');
		
		if(empty($id) || is_null($id))
			redirect(base_url('forum'),'refresh');

		if($this->forum_model->getRowTopicExist($id)  < 1)
			redirect(base_url('forum'),'refresh');


		$data['idlink'] = $id;

		$this->load->view('topic', $data);
		$this->load->view('footer');
	}

}
