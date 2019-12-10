<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdm extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	function __construct(){
		parent::__construct();
		$this->load->model('Dashboard_model');
		$this->load->model('Home_model');
		$this->load->model('SuperAdm_model');
		$this->load->library('Pdf');

		$this->load->library('session');
 		
 		if ($this->session->userdata('id_adm')) {
 			
		}else{
			redirect('login//loginadm', 'refresh');
		}
	}


	public function index()
	{
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['profil'] = $this->Dashboard_model->getProfilProjek();
		$data['status'] = $this->Dashboard_model->getstatus();
		$data['statusinf'] = $this->Dashboard_model->getstatuscount();
		$data['usercount'] = $this->Dashboard_model->getusercount();
		$data['sektor'] = $this->Home_model->getSektor();
		$data['kategoricount'] = $this->Dashboard_model->getkategoricount();
		$data['sektorcount'] = $this->Dashboard_model->getsektorcount();
		$data['admstaff'] = $this->Dashboard_model->data_adminstaff();

		$this->load->view('akses/admin/header_admin');
        $this->load->view('akses/admin/data_admin', $data);
	}


	public function addstaff(){
		$add = array(

			'display_name' => $_POST['display_name'],
			'email' => $_POST['email'],
			'username' =>  $_POST['username'],
			'password' =>  $_POST['password'],
			'role' =>  $_POST['role']
		);

		$this->Dashboard_model->addstaff($add);

		redirect('SuperAdm');
	}

	public function deletestaff(){

		$this->Dashboard_model->deletestaff($_POST['id_adm']);

		redirect('SuperAdm');

	}


	public function updatestaff(){
		$upd = array(
			'id_adm' => $_POST['id_adm'],
			'display_name' => $_POST['display_name'],
			'email' => $_POST['email'],
			'username' =>  $_POST['username'],
			'password' =>  $_POST['password'],
			'role' =>  $_POST['role']
		);

		$this->Dashboard_model->updatestaff($upd);

		redirect('SuperAdm');
	}
	
	// public function	adminpii(){
	// 	$data['active1'] = 'active';
	// 	$data['active2'] = '';
	// 	$data['active3'] = '';

	// 	$data['profil'] = $this->Dashboard_model->getProfilProjek();
	// 	$data['user'] = $this->Dashboard_model->getuser();
	// 	$data['admstaff'] = $this->Dashboard_model->data_adminstaff();
	// 	$data['sektor'] = $this->Home_model->getSektor();
	// 	$data['statusinf'] = $this->Dashboard_model->get_t_status_projek();

	// 	$this->load->view('akses/admin/header_admin');
	// 	$this->load->view('akses/admin/data_admin', $data);
	// }

	public function assesment(){
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		
		$data['asses'] = $this->SuperAdm_model->getassesment();

		$this->load->view('akses/admin/header_admin');
		$this->load->view('akses/admin/submission_superadmin', $data);
	}

	public function m1(){
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		// $data['profil'] = $this->Dashboard_model->getProfilProjek();
		// $data['user'] = $this->Dashboard_model->getuser();
		// $data['admstaff'] = $this->Dashboard_model->data_adminstaff();
		// $data['sektor'] = $this->Home_model->getSektor();
		// $data['statusinf'] = $this->Dashboard_model->get_t_status_projek();
		$data['m1s'] = $this->SuperAdm_model->getm1();

		$this->load->view('akses/admin/header_admin');
		$this->load->view('akses/admin/m1_superadmin', $data);
	}

	public function kementrian(){
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['mentri'] = $this->SuperAdm_model->getkementrian();

		$this->load->view('akses/admin/header_admin');
		$this->load->view('akses/admin/kementrian_superadm', $data);
	}

	public function lpnk(){
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		
		$data['llpnk'] = $this->SuperAdm_model->getlpnk();

		$this->load->view('akses/admin/header_admin');
		$this->load->view('akses/admin/lpnk_superadm', $data);
	}

	public function sektor(){
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		
		$data['sektor'] = $this->SuperAdm_model->getsektor();
	
		$this->load->view('akses/admin/header_admin');
		$this->load->view('akses/admin/sektor_superadm', $data);
	}

	public function subsektor(){
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['ssektor'] = $this->SuperAdm_model->getssektor();

		$this->load->view('akses/admin/header_admin');
		$this->load->view('akses/admin/subsektor_superadm', $data);
	}

	public function provinsi(){
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['provinsi'] = $this->SuperAdm_model->getprovinsi();		

		$this->load->view('akses/admin/header_admin');
		$this->load->view('akses/admin/provinsi_superadm', $data);
	}

	public function kotakabu(){
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['kkotakabu'] = $this->SuperAdm_model->getkotakabu();
		
		$this->load->view('akses/admin/header_admin');
		$this->load->view('akses/admin/kotakabu_superadm', $data);
	}
}