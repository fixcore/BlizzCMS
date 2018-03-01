<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getVotes()
    {
    	return $this->db->select('*')
    			->get('fx_votes');
    }

    public function getFinallyTime($id, $time)
    {
    	$qq = $this->db->select('lasttime')
    			->where('idaccount', $this->session->userdata('fx_sess_id'))
    			->where('idvote', $id)
    			->get('fx_votes_logs');

    	if($qq->num_rows())
	    	return strtotime('+'.$time.' hour', $qq->row_array()['lasttime']);
	    else
	    	return '0,0,0';
    }

    public function getVoteSpecify($id)
    {
    	return $this->db->select('*')
    			->where('id', $id)
    			->get('fx_votes');
    }

    public function getvoteNow($id)
    {
    	if($id == '0')
    		redirect(base_url('vote'),'refresh');

    	if(!$this->getVoteSpecify($id)->num_rows())
    		redirect(base_url('vote'),'refresh');

    	$url = $this->getVoteSpecify($id)->row_array()['url'];

    	if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
		    $url = "http://" . $url;
		}

    	if($this->m_data->getTimestamp() < /* >= */ $this->getFinallyTime($id, $this->getVoteSpecify($id)->row('time')) ||
    		!$this->getVoteSpecifyLog($this->session->userdata('fx_sess_id'), $id)->num_rows())
    	{
    		echo '<script type="text/javascript">
					window.open( "'.$url.'" )
				</script>';
			$this->insertPoints($this->session->userdata('fx_sess_id'), $id);
    		redirect(base_url('vote'),'refresh');
    	}
    	else
    		redirect(base_url('vote'),'refresh');
    }

    public function getVoteSpecifyLog($account, $idvote)
    {
    	return $this->db->select('*')
    			->where('idaccount', $account)
    			->where('idvote', $idvote)
    			->get('fx_votes_logs');
    }

    public function insertPoints($account, $idvote)
    {
    	$qq = $this->getVoteSpecifyLog($account, $idvote);

    	if($qq->num_rows())
    	{
    		$this->db->set('lasttime', $this->m_data->getTimestamp())
    				->where('idaccount', $account)
    				->where('idvote', $idvote)
    				->update('fx_votes_logs');
    	}
    	else
    	{
    		$data = array(
	    		'idaccount' => $account,
	    		'idvote' => $idvote,
	    		'lasttime' => $this->m_data->getTimestamp()
	    	);
    		$this->db->insert('fx_votes_logs', $data);	
    	}
    }
    
}
