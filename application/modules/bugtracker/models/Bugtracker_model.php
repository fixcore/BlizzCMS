<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bugtracker_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getBugtracker()
    {
    	return $this->db->query("SELECT * FROM fx_bugtracker WHERE close = 0");
    }

    public function count_all()
    {
    	return $this->db->get("fx_bugtracker")->num_rows();
    }

    public function fetch_details($limit, $start)
    {
    	$output = '';
    	$this->db->select("*");
    	$this->db->from("fx_bugtracker");
    	$this->db->where("close = 0");
    	$this->db->order_by("id", "ASC");
    	$this->db->limit($limit, $start);
    	$query = $this->db->get();

    	$output .= '
    	<table class="uk-table uk-table-divider">
    		<thead>
                <tr>
                    <th style="color: #fff;"><i class="fa fa-book" aria-hidden="true"></i> '.$this->lang->line("id").'</th>
	    			<th class="uk-text-center" style="color: #fff;"><i class="fa fa-bookmark" aria-hidden="true"></i> '.$this->lang->line("expr_title").'</th>
	    			<th class="uk-text-center" style="color: #fff;"><i class="fa fa-list" aria-hidden="true"></i> '.$this->lang->line("type").'</th>
	    			<th class="uk-text-center" style="color: #fff;"><i class="fa fa-info-circle" aria-hidden="true"></i> '.$this->lang->line("expr_status").'</th>
	    			<th class="uk-text-center" style="color: #fff;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line("expr_priority").'</th>
	    		</tr>

	    		<tbody>
    	';

    	foreach ($query->result() as $row) {
    		$output .= '

    		<tr>

    		<td>
    			<a href="'.base_url('bugtracker/post/').$row->id.'">
                    <span class="uk-light">'.$row->id.'</span>
				</a>
    		</td>

    		<td class="uk-text-center">
    			<a href="'.base_url('bugtracker/post/').$row->id.'">
                    <span class="uk-light">'.$row->title.'</span>
                </a>
            </td>

            <td class="uk-text-center">
    			<a href="'.base_url('bugtracker/post/').$row->id.'">
                    <span class="uk-label">'.$this->bugtracker_model->getType($row->type).'</span>
                </a>
            </td>

            <td class="uk-text-center">
    			<a href="'.base_url('bugtracker/post/').$row->id.'">
                    <span class="uk-label uk-label-success">'.$this->bugtracker_model->getStatus($row->status).'</span>
                </a>
            </td>

            <td class="uk-text-center">
    			<a href="'.base_url('bugtracker/post/').$row->id.'">
                    <span class="uk-label uk-label-warning">'.$this->bugtracker_model->getPriority($row->priority).'</span>
                </a>
            </td>

            <tr>

    		';
    	}

    	$output .= '</tbody> </table>';
    	return $output;
    }

    public function insertIssue($title, $type, $desc, $url)
    {
    	$date = $this->m_data->getTimestamp();
    	$author = $this->session->userdata('fx_sess_id');

    	$this->db->query("INSERT INTO fx_bugtracker (title, description, type, url, date, author, close) VALUES ('$title', '$desc', '$type', '$url', '$date', '$author', '0')");

    	redirect(base_url('bugtracker'),'refresh');
    }

    public function getTypes()
    {
    	return $this->db->query("SELECT id, title FROM fx_bugtracker_type ORDER BY id");
    }

    public function getType($id)
    {
    	return $this->db->query("SELECT title FROM fx_bugtracker_type WHERE id = '".$id."'")->row_array()['title'];
    }

    public function getTitleIssue($id)
    {
        return $this->db->query("SELECT title FROM fx_bugtracker WHERE id = '".$id."'")->row_array()['title'];
    }

    public function getDescIssue($id)
    {
        return $this->db->query("SELECT description FROM fx_bugtracker WHERE id = '".$id."'")->row_array()['description'];
    }

    public function getUrlIssue($id)
    {
        $qq = $this->db->query("SELECT url FROM fx_bugtracker WHERE id = '".$id."'")->row_array()['url'];

        if (empty($qq))
            return 'Empty';
        else
            return $qq;
    }

    public function getStatus($id)
    {
        return $this->db->query("SELECT title FROM fx_bugtracker_status WHERE id = '".$id."'")->row_array()['title'];
    }

    public function getStatusID($id)
    {
        return $this->db->query("SELECT status FROM fx_bugtracker WHERE id = '".$id."'")->row_array()['status'];
    }

    public function getPriority($id)
    {
        return $this->db->query("SELECT title FROM fx_bugtracker_priority WHERE id = '".$id."'")->row_array()['title'];
    }

    public function getPriorityID($id)
    {
        return $this->db->query("SELECT priority FROM fx_bugtracker WHERE id = '".$id."'")->row_array()['priority'];
    }

    public function getTypeID($id)
    {
        return $this->db->query("SELECT type FROM fx_bugtracker WHERE id = '".$id."'")->row_array()['type'];
    }

    public function getDate($id)
    {
        return $this->db->query("SELECT date FROM fx_bugtracker WHERE id = '".$id."'")->row_array()['date'];
    }

    public function closeStatus($id)
    {
        return $this->db->query("SELECT close FROM fx_bugtracker WHERE id = '".$id."'")->row()->close;
    }

    public function getAuthor($id)
    {
        return $this->db->query("SELECT author FROM fx_bugtracker WHERE id = '".$id."'")->row()->author;
    }

}
