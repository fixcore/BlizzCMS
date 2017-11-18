<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function encryptBattlenet($email, $password)
    {
        $sha_pass_hash_bnet = strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash("sha256",strtoupper(hash("sha256", strtoupper($email)).":".strtoupper($password))))))));

        return $sha_pass_hash_bnet;
    }

    public function encryptAccount($username, $password)
    {
        if(!is_string($username)) { $username = ""; }
        if(!is_string($password)) { $password = ""; }
        $sha_pass_hash = sha1(strtoupper($username).':'.strtoupper($password));
        
        return strtoupper($sha_pass_hash);
    }

    public function arraySession($id)
    {
    	$data = array
    	(
    		'fx_sess_username'  => $this->getUsernameID($id),
    		'fx_sess_email'		=> $this->getEmailID($id),
    		'fx_sess_id'		=> $id,
    		'fx_sess_expansion'	=> $this->getExpansionID($id),
    		'fx_sess_last_ip'	=> $this->getLastIPID($id),
    		'fx_sess_last_login'=> $this->getLastLoginID($id),
    		'fx_sess_gmlevel'	=> $this->getRank($id),
            'fx_sess_ban_status'=> $this->getBanStatus($id),
    		'fx_sess_tag'       => $this->getTag($id),
	        'logged_in' => TRUE
    	);

    	return $this->sessionConnect($data);
    }

    public function getTag($id)
    {
        $this->db = $this->load->database('default', TRUE);

        $qq = $this->db->query("SELECT tag FROM fx_tags WHERE id = '".$id."'");

        foreach ($qq->result() as $row) {
            return $row->tag;
        }
    }

    public function getUsernameID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT username FROM account WHERE id = '".$id."'");
    	
    	foreach ($qq->result() as $row)
    	{
    		return $row->username;
    	}
    }

    public function getEmailID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT email FROM account WHERE id = '".$id."'");
    	
    	foreach ($qq->result() as $row)
    	{
    		return $row->email;
    	}
    }

    public function getPasswordAccountID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT sha_pass_hash FROM account WHERE id = '".$id."'");
    	
    	foreach ($qq->result() as $row)
    	{
    		return $row->sha_pass_hash;
    	}
    }

    public function getPasswordBnetID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT sha_pass_hash FROM battlenet_accounts WHERE id = '".$id."'");
    	
    	foreach ($qq->result() as $row)
    	{
    		return $row->sha_pass_hash;
    	}
    }

    public function getIDAccount($account)
    {
        $account = strtoupper($account);

        $this->db = $this->load->database('auth', TRUE);

        $qq = $this->db->query("SELECT id FROM account WHERE username = '".$account."'");

        if ($qq->num_rows() > 0)
        {
            foreach ($qq->result() as $row)
            {
                return $row->id;
            }
        }
        else
            return "0";
    }

    public function getCountry()
    {
        return $this->db->query("SELECT * FROM fx_country");
    }

    public function getQuestion()
    {
        return $this->db->query("SELECT * FROM fx_questions");
    }

    public function getIDEmail($email)
    {
        $email = strtoupper($email);

        $this->db = $this->load->database('auth', TRUE);

        $qq = $this->db->query("SELECT id FROM account WHERE email = '".$email."'");

        if ($qq->num_rows() > 0)
        {
            foreach ($qq->result() as $row)
            {
                return $row->id;
            }
        }
        else
            return "0";
    }

    public function getExpansionID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT expansion FROM account WHERE id = '".$id."'");

    	foreach ($qq->result() as $row)
    	{
    		return $row->expansion;
    	}
    }

    public function getLastIPID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT last_ip FROM account WHERE id = '".$id."'");

    	foreach ($qq->result() as $row)
    	{
    		return $row->last_ip;
    	}
    }

    public function getLastLoginID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT last_login FROM account WHERE id = '".$id."'");

    	foreach ($qq->result() as $row)
    	{
    		return $row->last_login;
    	}
    }

    public function getRank($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT * FROM account_access WHERE id = '".$id."'");

    	if ($qq->num_rows() > 0)
    	{
    		foreach ($qq->result() as $row)
            {
    			return $row->gmlevel;
    		}
    	}
    	else
    		return "0";
    }

    public function getBanStatus($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT * FROM account_banned WHERE id = '".$id."' AND active = 1");

    	if ($qq->num_rows() > 0)
    		return true;
    	else
    		return false;
    }

    public function isLogged()
    {
    	if ($this->session->userdata('fx_sess_username'))
			return true;
		else
			return false;
    }

    public function sessionConnect($data)
    {
    	$this->session->set_userdata($data);
    	redirect(base_url(),'refresh');
    }

    public function logout()
    {
    	$this->session->sess_destroy();
		redirect(base_url(),'refresh');
    }
}
