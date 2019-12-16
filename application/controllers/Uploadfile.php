<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadfile extends CI_Controller {


	function __construct(){
		parent::__construct();
        
        $this->load->model('Home_model');

	}
	
	public function index(){

		$this->load->view('upload');
	}

	private function _uploadImage()
	{
    	$config['upload_path']          = './assets/upload/';
    	$config['allowed_types']        = 'gif|jpg|png';
    	$config['file_name']            = $_POST['file_upload'];
    	$config['overwrite']			= true;
    	$config['max_size']             = 1024; // 1MB
    	// $config['max_width']            = 1024;
    	// $config['max_height']           = 768;

    	$this->load->library('upload', $config);

    	if ($this->upload->do_upload('image')) {
        	return $this->upload->data("file_name");
    	}
    
    	return "default.jpg";
	}


	public function save(){

		$image = 

		$sql = "INSERT INTO `t1`(`upload`) VALUES ('')";

		$query = $this->db->query($sql);

		redirect('Uploadfile');
	}
}