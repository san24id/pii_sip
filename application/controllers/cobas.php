<?php 

class cobas extends CI_Controller{


	function __construct(){
		parent::__construct();

		
	}

	public function index(){

		echo $this->uri->segment(3);
	}
}