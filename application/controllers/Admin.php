<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
		if (!$this->m_data->isLogged())
			redirect(base_url(),'refresh');

		if ($this->m_general->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
			redirect(base_url(),'refresh');

		if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
			redirect(base_url(),'refresh');

		$this->load->view('admin/general/header');
		$this->load->view('admin/index');
		$this->load->view('admin/general/footer');
	}

	public function users()
	{
		if (!$this->m_data->isLogged())
			redirect(base_url(),'refresh');

		if ($this->m_general->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
			redirect(base_url(),'refresh');

		if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
			redirect(base_url(),'refresh');

		$this->load->view('admin/general/header');
		$this->load->view('admin/account/acclist');
		$this->load->view('admin/general/footer');
	}

	public function chars()
	{
		if (!$this->m_data->isLogged())
			redirect(base_url(),'refresh');

		if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
			redirect(base_url(),'refresh');

		if ($this->m_general->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
			redirect(base_url(),'refresh');

		$this->load->view('admin/general/header');
		$this->load->view('admin/characters/charlist');
		$this->load->view('admin/general/footer');
	}

	public function addnew()
	{
		if (!$this->m_data->isLogged())
			redirect(base_url(),'refresh');

		if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
			redirect(base_url(),'refresh');

		$this->load->view('admin/general/header');
		$this->load->view('admin/news/addnew');
		$this->load->view('admin/general/footer');
	}

	public function alist($id)
	{
		if (is_null($id) || empty($id))
			redirect(base_url(),'refresh');

		if ($this->m_general->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
			redirect(base_url(),'refresh');

		if (!$this->m_data->isLogged())
			redirect(base_url(),'refresh');

		if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
			redirect(base_url(),'refresh');

		if ($this->m_general->getAccountExist($id)->num_rows() < 1)
			redirect(base_url(),'refresh');

		$data['idlink'] = $id;

		$this->load->view('admin/general/header');
		$this->load->view('admin/news/alist', $data);
		$this->load->view('admin/general/footer');
	}

}
