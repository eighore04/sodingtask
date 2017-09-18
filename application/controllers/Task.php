<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['taskList'] = $this->Global->getTaskList(); 

		$this->template->load('base_template', 'tpl/index', $data);
	}

	public function add()
	{
		$this->load->view('tpl/add');
	}

	public function save()
	{
		$data = array(
			'name'        => $this->input->post('taskName'),
			'description' => $this->input->post('taskDesc'),
			'dateCreated' => date('Y-m-d H:i:s')
		);


		$insert = $this->Global->insert($data);

		if($insert)
		{
			$status = 'success';
			$message = 'Done adding new task';
		}
		else
		{
			$status = 'fail';
			$message = 'Failed to process your request.';
		}

		echo json_encode(array('status'=>$status, 'message'=>$message));
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['detail'] = $this->Global->getTaskDetails($id);
		$data['taskID'] = $id;

		$this->load->view('tpl/edit', $data);
	}

	public function update()
	{
		$data = array(
			'name'        => $this->input->post('taskName'),
			'description' => $this->input->post('taskDesc'),
			'dateUpdated' => date('Y-m-d H:i:s')
		);


		$update = $this->Global->update($data, $this->input->post('taskID'));

		if($update)
		{
			$status = 'success';
			$message = 'Task successfully updated.';
		}
		else
		{
			$status = 'fail';
			$message = 'Failed to process your request.';
		}

		echo json_encode(array('status'=>$status, 'message'=>$message));
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$delete = $this->Global->delete($id);

		if($delete)
		{
			$status = 'success';
			$message = 'Task has been successfully deleted.';
		}
		else
		{
			$status = 'fail';
			$message = 'Failed to process your request.';
		}

		echo json_encode(array('status'=>$status, 'message'=>$message));
	}
}
