<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->model('tasks');
		$tasks = $this->tasks->tasks_list();
		//print_r($tasks) ; exit;
		$this->load->view('welcome_message' , ['tasks' =>$tasks]);

	}
}
