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
	    			<th>'.$this->lang->line("expr_title").'</th>
	    			<th>'.$this->lang->line("type").'</th>
	    			<th>'.$this->lang->line("expr_status").'</th>
	    			<th>'.$this->lang->line("expr_priority").'</th>
	    		</tr>

	    		<tbody>
    	';

    	foreach ($query->result() as $row) {
    		$output .= '

    		<tr>
    		
    		<td>
    			<a href="'.base_url('bugtracker/post/').$row->id.'">'.$row->id.'</a>
    		</td>

    		<td>
    			<a href="'.base_url('bugtracker/post/').$row->id.'">
                    <span class="uk-label">'.$row->title.'</span>            
                </a>
            </td>

            <td>
    			<a href="'.base_url('bugtracker/post/').$row->id.'">
                    <span class="uk-label uk-label-success">'.$this->bugtracker_model->getType($row->type).'</span>            
                </a>
            </td>

            <td>
    			<a href="'.base_url('bugtracker/post/').$row->id.'">
                    <span class="uk-label uk-label-warning">'.$this->bugtracker_model->getStatus($row->status).'</span>            
                </a>
            </td>

            <td>
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

    public function getType($id)
    {
    	return $this->db->query("SELECT title FROM fx_bugtracker_type WHERE id = '".$id."'")->row_array()['title'];
    }

    public function getStatus($id)
    {
    	return $this->db->query("SELECT title FROM fx_bugtracker_status WHERE id = '".$id."'")->row_array()['title'];
    }

    public function getPriority($id)
    {
    	return $this->db->query("SELECT title FROM fx_bugtracker_priority WHERE id = '".$id."'")->row_array()['title'];
    }

}
