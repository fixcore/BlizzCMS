<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

    public function index()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('index');
        $this->load->view('general/footer');
    }

    public function users()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('account/acclist');
        $this->load->view('general/footer');
    }

    public function apic()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('api/create');
        $this->load->view('general/footer');
    }

    public function capic()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('api/capic');
        $this->load->view('general/footer');
    }

    public function listnew()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('news/listnew');
        $this->load->view('general/footer');
    }

    public function chars()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('characters/charlist');
        $this->load->view('general/footer');
    }

    public function forums()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('forum/index');
        $this->load->view('general/footer');
    }

    public function mcategory()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('forum/mcategory');
        $this->load->view('general/footer');
    }

    public function ccategory()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('forum/ccategory');
        $this->load->view('general/footer');
    }

    public function mforum()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('forum/mforum');
        $this->load->view('general/footer');
    }

    public function cforum()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('forum/cforum');
        $this->load->view('general/footer');
    }

    public function addnew()
    {
        $this->load->model('admin_model');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        $this->load->view('general/header');
        $this->load->view('news/addnew');
        $this->load->view('general/footer');
    }

    public function alist($id)
    {
        $this->load->model('admin_model');

        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->m_general->getAccountExist($id)->num_rows() < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('account/alist', $data);
        $this->load->view('general/footer');
    }

    public function clist($id)
    {
        $this->load->model('admin_model');

        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->m_general->getGeneralCharactersSpecifyGuid($id)->num_rows() < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('characters/clist', $data);
        $this->load->view('general/footer');
    }

    public function nlist($id)
    {
        $this->load->model('admin_model');

        if (is_null($id) || empty($id))
            redirect(base_url(),'refresh');

        if ($this->admin_model->getBanSpecify($this->session->userdata('fx_sess_id'))->num_rows() > 0)
            redirect(base_url(),'refresh');

        if (!$this->m_data->isLogged())
            redirect(base_url(),'refresh');

        if ($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) != 1)
            redirect(base_url(),'refresh');

        if ($this->admin_model->getGeneralNewsSpecifyRows($id) < 1)
            redirect(base_url(),'refresh');

        $data['idlink'] = $id;

        $this->load->view('general/header');
        $this->load->view('news/nlist', $data);
        $this->load->view('general/footer');
    }
}
