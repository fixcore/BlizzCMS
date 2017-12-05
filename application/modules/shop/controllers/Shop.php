<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends MX_Controller {

    public function index()
    {
        $this->load->model('shop_model');
		
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function addtocart()
    {
    	$this->load->model('shop_model');

        if ($this->m_data->isLogged() == FALSE)
            redirect(base_url('login'),'refresh');

        if(isset($_GET['id']) && isset($_GET['tp']))
        {
        	$mode = $_GET['tp'];
        	$item = $_GET['id'];

            if ($mode == "vp")
                $this->shop_model->getVPTrue($item);

            if ($mode == "dp")
                $this->shop_model->getDPTrue($item);

            $this->shop_model->addtoCar(
                $this->shop_model->getItem($item), 
                $this->shop_model->getType($item), 
                $this->shop_model->getPriceType($item, $mode), 
                $mode, 
                $this->shop_model->getQuery($item)
            );

        }
        else
        	redirect(base_url('shop'),'refresh');
    }
}
