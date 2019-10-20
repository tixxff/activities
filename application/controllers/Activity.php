<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Activity extends CI_Controller {
	public function __construct()
	{
	parent :: __construct();
	//	$this->load->helper('url');
		$this->load->model('activities_model');
	}

	function index()
	{
		$this->load->helper('date');

		$activity_data = $this->activities_model->get_all();

		$data['activity_data'] = $activity_data;

		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		// $this->load->view('layout/header');
		$this->load->view('activity/content', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
	function insert(){
		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		$this->load->view('activity/insert/content');
		$this->load->view('layout/footer');
		$this->load->view('activity/insert/script');
		$this->load->view('layout/foot');
	}
	function update(){
		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		$this->load->view('activity/update/content');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
	function delete(){
		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		$this->load->view('activity/delete/content');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
}