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
        if ($qq->num_rows() > 0)
            return $qq->row()->tag;
        else
            return '0';
    }

    public function randomUTF()
    {
        return rand(0, 999999999);
    }

    public function getUsernameID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	return $this->db->query("SELECT username FROM account WHERE id = '".$id."'")->row_array()['username'];
    }

    public function getEmailID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT email FROM account WHERE id = '".$id."'")->row();
        return $qq->email;
    }

    public function getPasswordAccountID($id)
    {
        $this->db = $this->load->database('auth', TRUE);

        $qq = $this->db->query("SELECT sha_pass_hash FROM account WHERE id = '".$id."'")->row();
        return $qq->sha_pass_hash;
    }

    public function getPasswordBnetID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT sha_pass_hash FROM battlenet_accounts WHERE id = '".$id."'")->row();
        return $qq->sha_pass_hash;
    }

    public function getSpecifyAccount($account)
    {
        $account = strtoupper($account);

        $this->db = $this->load->database('auth', TRUE);

        return $this->db->query("SELECT id FROM account WHERE username = '".$account."'");
    }

    public function getIDAccount($account)
    {
        $account = strtoupper($account);

        $this->db = $this->load->database('auth', TRUE);

        $qq = $this->db->query("SELECT id FROM account WHERE username = '".$account."'");
        $query = $qq->row();

        if ($qq->num_rows() > 0)
            return $query->id;
        else
            return "0";
    }

    public function getTimestamp()
    {
        $date = new DateTime();
        $date = $date->getTimestamp();
        return $date;
    }

    public function insertRegister($name, $surname, $username, $email, $question, $password, $answer, $year, $month, $day)
    {
        $date       = $this->getTimestamp();
        $expansion  = $this->m_general->getRealExpansionDB();
        $passwordAc = $this->encryptAccount($username, $password);
        $passwordBn = $this->encryptBattlenet($email, $password);
        $tag = rand(1111, 9999);

        if ($this->m_general->getExpansionAction($this->config->item('expansion_id')) <= 3)
        {
            $this->auth = $this->load->database('auth', TRUE);
            
            $this->auth->query("INSERT INTO account (username, sha_pass_hash, email, expansion) VALUES ('$username', '$passwordAc', '$email', '$expansion')");
        }
        else
        {
            $this->auth = $this->load->database('auth', TRUE);
            
            $this->auth->query("INSERT INTO account (username, sha_pass_hash, email, expansion, battlenet_index) VALUES ('$username', '$passwordAc', '$email', '$expansion', '1')");

            $id = $this->getIDAccount($username);
            
            $this->auth->query("INSERT INTO battlenet_accounts (id, email, sha_pass_hash) VALUES ('$id', '$email', '$passwordBn')");

            $this->auth->query("UPDATE account SET battlenet_account = $id WHERE id = $id");
        }

        $id = $this->getIDAccount($username);

        $this->db = $this->load->database('default', TRUE);

        $this->db->query("INSERT INTO fx_users (id, name, surname, username, email, question, answer, year, month, day, date) VALUES ('$id', '$name', '$surname', '$username', '$email', '$question', '$answer', '$year', '$month', '$day', '$date')");

        $this->db->query("INSERT INTO fx_tags (id, tag) VALUES ('$id', '$tag')");

        redirect(base_url('login'),'refresh');
    }

    public function getCountry()
    {
        return $this->db->query("SELECT * FROM fx_country");
    }

    public function getQuestion()
    {
        return $this->db->query("SELECT * FROM fx_questions");
    }

    public function getImageProfile($id)
    {
        $this->db = $this->load->database('default', TRUE);
        $qq = $this->db->query("SELECT profile FROM fx_users WHERE id = '".$id."'")->row_array();
        return $qq['profile'];
    }

    public function getNameAvatar($id)
    {
        return $this->db->query("SELECT name FROM fx_avatars WHERE id = '".$id."'")->row_array()['name'];
    }

    public function getIDEmail($email)
    {
        $email = strtoupper($email);

        $this->db = $this->load->database('auth', TRUE);

        $qq = $this->db->query("SELECT id FROM account WHERE email = '".$email."'");
        $query = $qq->row();

        if ($qq->num_rows() > 0)
            return $query->id;
        else
            return "0";
    }

    public function getExpansionID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT expansion FROM account WHERE id = '".$id."'")->row();
        return $qq->expansion;
    }

    public function getLastIPID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT last_ip FROM account WHERE id = '".$id."'")->row();
        return $qq->last_ip;
    }

    public function getLastLoginID($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT last_login FROM account WHERE id = '".$id."'")->row();
        return $qq->last_login;
    }

    public function getRank($id)
    {
    	$this->db = $this->load->database('auth', TRUE);

    	$qq = $this->db->query("SELECT * FROM account_access WHERE id = '".$id."'");
        $query = $qq->row();

    	if ($qq->num_rows() > 0)
    	{
    		return $query->gmlevel;
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
