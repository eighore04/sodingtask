<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getTaskList()
	{
		$this->db->select('*');
		$this->db->from('task');

		$query = $this->db->get();

		return $query->result();
	}

	public function getTaskDetails($id)
	{
		$this->db->select('*');
		$this->db->from('task');
		$this->db->where('id', $id);

		$query = $this->db->get();

		return $query->row();
	}

	public function insert($data)
	{
		$this->db->trans_begin();
		$this->db->insert('task', $data);
		$taskID = $this->db->insert_id();
		
		if($this->db->trans_status() === FALSE) :
			$this->db->trans_rollback();

			return FALSE;
		else :
			$this->db->trans_commit();
		
			return $taskID;
		endif;
	}

	public function update($data, $id)
	{
		$this->db->trans_begin();
		$this->db->where('id', $id);
		$this->db->update('task', $data);

		if($this->db->trans_status() === FALSE) :
			$this->db->trans_rollback();

			return FALSE;
		else :
			$this->db->trans_commit();
			
			return TRUE;
		endif;
	}

	public function delete($id)
	{
		$this->db->trans_begin();
		$this->db->where('id', $id);
		$this->db->delete('task'); 

		if($this->db->trans_status() === FALSE) :
			$this->db->trans_rollback();

			return FALSE;
		else :
			$this->db->trans_commit();
			
			return TRUE;
		endif;
	}
}
