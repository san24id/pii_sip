<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function index()
	{
		
	}

	public function chart_risk()
	{

		$this->load->view('charts/risk_chart');
	}

		public function chart_treatment()
	{

		$this->load->view('charts/treatment_chart');
	}

		public function pie_submited()
	{

		$this->load->view('charts/submited_pie');
	}

		public function pie_action_plan()
	{

		$this->load->view('charts/action_plan_pie');
	}

		public function kategori_bar()
	{

		$this->load->view('charts/kategori_bar');
	}

		public function bar_chart()
	{
		$this->load->view('charts/bar_chart');
	}

		public function pie_chart()
	{
		$this->load->view('charts/pie_chart');
	}


	public function pie_status()
	{
		$this->load->view('charts/pie_status');
	}


	public function pie_kategori()
	{
		$this->load->view('charts/pie_kategori');
	}




}