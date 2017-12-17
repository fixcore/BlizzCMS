<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends MX_Controller {

    public function index()
    {
        if($this->m_modules->getStatusStore() != '1')
            redirect(base_url(),'refresh');

        $this->load->model('shop_model');

        $this->load->view('index');
        $this->load->view('footer');
    }

    public function cart($id)
    {
        if($this->m_modules->getStatusStore() != '1')
            redirect(base_url(),'refresh');
        
        $this->load->model('shop_model');

        if (!$this->m_data->isLogged())
            redirect(base_url('login'),'refresh');

        if ($this->shop_model->getExistItem($id) < 1)
            redirect(base_url('store'),'refresh');

        if(isset($_GET['tp']))
        {
            $mode = $_GET['tp'];

            if ($mode != 'vp' && $mode != 'dp')
                redirect(base_url('store'),'refresh');
            
            if ($mode == "vp")
                $this->shop_model->getVPTrue($id);
            if ($mode == "dp")
                $this->shop_model->getDPTrue($id);

            $data['idlink'] = $id;
            $this->load->view('cart', $data);
            $this->load->view('footer');
        }
        else
            redirect(base_url('store'),'refresh');
    }
    
}
