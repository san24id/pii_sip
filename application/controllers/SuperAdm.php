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

		$this->load->view('akses/admin/header_admin', $data);
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
		$data['assesment'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		
		$data['asses'] = $this->SuperAdm_model->getassesment();
		$data['sum'] = $this->SuperAdm_model->getsum();		

		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/submission_superadmin', $data);
	}

	public function addassesment(){
		$add = array(

			'section' => $_POST['section'],
			'nomor_urut' => $_POST['nomor_urut'],
			'creteria' => $_POST['creteria'],
			'intruksi_upload' =>  $_POST['intruksi_upload'],
			'penjelasan' =>  $_POST['penjelasan'],
			'informasi_upload' =>  $_POST['informasi_upload'],
			'respon' => $_POST['respon'],
			'bobot' => $_POST['bobot'],
			's_upload' => $_POST['supload']
		);

		$this->SuperAdm_model->addassesment($add);

		redirect('superadm/impassesment');
	}

	public function deleteassesment(){

		$this->SuperAdm_model->deleteassesment($_POST['id_ass']);

		redirect('superadm/impassesment');

	}

	public function updateassesment(){
		$upd = array(
			'id_ass' => $_POST['id_ass'],
			'section' => $_POST['section'],
			'nomor_urut' => $_POST['nomor_urut'],
			'creteria' => $_POST['creteria'],
			'intruksi_upload' =>  $_POST['intruksi_upload'],
			'penjelasan' =>  $_POST['penjelasan'],
			'informasi_upload' =>  $_POST['informasi_upload'],
			'respon' => $_POST['respon'],
			'bobot' => $_POST['bobot'],
			's_upload' => $_POST['supload']
		);

		$this->SuperAdm_model->updateassesment($upd);

		redirect('superadm/impassesment');
	}

	public function m1(){
		$data['m1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		
		$data['m1s'] = $this->SuperAdm_model->getm1();

		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/m1_superadmin', $data);
	}

	public function addm1(){
		$add = array(

			'id_ass' => $_POST['id_ass'],
			'urut' => $_POST['urut'],
			'a' =>  $_POST['a'],
			'b' =>  $_POST['b']
		);

		$this->SuperAdm_model->addm1($add);

		redirect('superadm/impm1');
	}

	public function deletem1(){

		$this->SuperAdm_model->deletem1($_POST['id']);

		redirect('superadm/impm1');

	}

	public function updatem1(){
		$upd = array(
			'id' => $_POST['id'],
			'id_ass' => $_POST['id_ass'],
			'urut' => $_POST['urut'],
			'a' =>  $_POST['a'],
			'b' =>  $_POST['b']
		);

		$this->SuperAdm_model->updatem1($upd);

		redirect('superadm/impm1');
	}

	public function kementrian(){
		$data['kementrian'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['mentri'] = $this->SuperAdm_model->getkementrian();

		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/kementrian_superadm', $data);
	}

	public function addkementrian(){
		$add = array(

			'nama_kementerian' => $_POST['nama_kementerian']
			// 'nomor_urut' => $_POST['nomor_urut'],
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
			// 'respon' => $_POST['respon'],
			// 'bobot' => $_POST['bobot']
		);

		$this->SuperAdm_model->addkementrian($add);

		redirect('SuperAdm/kementrian');
	}

	public function deletekementrian(){

		$this->SuperAdm_model->deletekementrian($_POST['id_kementerian']);

		redirect('SuperAdm/kementrian');

	}

	public function updatekementrian(){
		$upd = array(
			'id' => $_POST['id'],
			'id_kementerian' => $_POST['id_kementerian'],
			'nama_kementerian' => $_POST['nama_kementerian']
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
		);

		$this->SuperAdm_model->updatekementrian($upd);

		redirect('SuperAdm/kementrian');
	}

	public function lpnk(){
		$data['lpnk'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		
		$data['llpnk'] = $this->SuperAdm_model->getlpnk();

		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/lpnk_superadm', $data);
	}

	public function addlpnk(){
		$add = array(

			'nama_lpnk' => $_POST['nama_lpnk']
			// 'nomor_urut' => $_POST['nomor_urut'],
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
			// 'respon' => $_POST['respon'],
			// 'bobot' => $_POST['bobot']
		);

		$this->SuperAdm_model->addlpnk($add);

		redirect('SuperAdm/lpnk');
	}

	public function deletelpnk(){

		$this->SuperAdm_model->deletelpnk($_POST['id_lpnk']);

		redirect('SuperAdm/lpnk');

	}

	public function updatelpnk(){
		$upd = array(
			'id_lpnk' => $_POST['id_lpnk'],
			'nama_lpnk' => $_POST['nama_lpnk']
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
		);

		$this->SuperAdm_model->updatelpnk($upd);

		redirect('SuperAdm/lpnk');
	}

	public function sektor(){
		$data['sektor'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		
		$data['sektor'] = $this->SuperAdm_model->getsektor();
	
		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/sektor_superadm', $data);
	}

	public function addsektor(){
		$add = array(

			'nama_sektor' => $_POST['nama_sektor']
			// 'nomor_urut' => $_POST['nomor_urut'],
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
			// 'respon' => $_POST['respon'],
			// 'bobot' => $_POST['bobot']
		);

		$this->SuperAdm_model->addsektor($add);

		redirect('SuperAdm/sektor');
	}

	public function deletesektor(){

		$this->SuperAdm_model->deletesektor($_POST['id_sektor']);

		redirect('SuperAdm/sektor');

	}

	public function updatesektor(){
		$upd = array(
			'id_sektor' => $_POST['id_sektor'],
			'nama_sektor' => $_POST['nama_sektor']
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
		);

		$this->SuperAdm_model->updatesektor($upd);

		redirect('SuperAdm/sektor');
	}
	
	public function subsektor(){
		$data['subsektor'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['ssektor'] = $this->SuperAdm_model->getssektor();

		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/subsektor_superadm', $data);
	}

	public function addssektor(){
		$add = array(

			'id_sektor' => $_POST['id_sektor'],
			'nama_subsektor' => $_POST['nama_subsektor']
			// 'nomor_urut' => $_POST['nomor_urut'],
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
			// 'respon' => $_POST['respon'],
			// 'bobot' => $_POST['bobot']
		);

		$this->SuperAdm_model->addssektor($add);

		redirect('SuperAdm/subsektor');
	}

	public function deletessektor(){

		$this->SuperAdm_model->deletessektor($_POST['id_subsektor']);

		redirect('SuperAdm/subsektor');

	}

	public function updatessektor(){
		$upd = array(
			'id_subsektor' => $_POST['id_subsektor'],
			'id_sektor' => $_POST['id_sektor'],
			'nama_subsektor' => $_POST['nama_subsektor']
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
		);

		$this->SuperAdm_model->updatessektor($upd);

		redirect('SuperAdm/subsektor');
	}

	public function provinsi(){
		$data['prov'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['provinsi'] = $this->SuperAdm_model->getprovinsi();		

		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/provinsi_superadm', $data);
	}

	public function addprov(){
		$add = array(

			'nama_provinsi' => $_POST['nama_provinsi']
			// 'nomor_urut' => $_POST['nomor_urut'],
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
			// 'respon' => $_POST['respon'],
			// 'bobot' => $_POST['bobot']
		);

		$this->SuperAdm_model->addprov($add);

		redirect('SuperAdm/provinsi');
	}

	public function deleteprov(){

		$this->SuperAdm_model->deleteprov($_POST['id_provinsi']);

		redirect('SuperAdm/provinsi');

	}

	public function updateprov(){
		$upd = array(
			'id_provinsi' => $_POST['id_provinsi'],
			'nama_provinsi' => $_POST['nama_provinsi']
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
		);

		$this->SuperAdm_model->updateprov($upd);

		redirect('SuperAdm/provinsi');
	}

	public function kotakabu(){
		$data['kotakab'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['kkotakabu'] = $this->SuperAdm_model->getkotakabu();
		
		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/kotakabu_superadm', $data);
	}

	public function addkotakabu(){
		$add = array(
			'id_provinsi' => $_POST['id_provinsi'],
			'nama_daerah' => $_POST['nama_daerah']
			// 'nomor_urut' => $_POST['nomor_urut'],
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
			// 'respon' => $_POST['respon'],
			// 'bobot' => $_POST['bobot']
		);

		$this->SuperAdm_model->addkotakabu($add);

		redirect('SuperAdm/kotakabu');
	}

	public function deletekotakabu(){

		$this->SuperAdm_model->deletekotakabu($_POST['id_kotakabu']);

		redirect('SuperAdm/kotakabu');

	}

	public function updatekotakabu(){
		$upd = array(
			'id_kotakabu' => $_POST['id_kotakabu'],
			'id_provinsi' => $_POST['id_provinsi'],
			'nama_daerah' => $_POST['nama_daerah']
			// 'urut' => $_POST['urut'],
			// 'a' =>  $_POST['a'],
			// 'b' =>  $_POST['b']
			// 'su' =>  $_POST['informasi_upload']
		);

		$this->SuperAdm_model->updatekotakabu($upd);

		redirect('SuperAdm/kotakabu');
	}

	public function user(){
		$data['data_user'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['user'] = $this->SuperAdm_model->getuser();
		
		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/user_superadm', $data);
	}

	public function updateuser(){
		$upd = array(
			'id_user' => $_POST['id_user'],
			'nomor_user' => $_POST['nomor_user'],
			'nik' => $_POST['nik'],
			'foto' => $_POST['foto'],
			'nama_user' =>  $_POST['nama_user'],
			'instansi' =>  $_POST['instansi'],
			'jabatan' =>  $_POST['jabatan'],
			'email' => $_POST['email'],
			'telepon' => $_POST['telepon'],
			'username' => $_POST['username'],			
			'status' => $_POST['status']
			// 'status_1' => $_POST['status_1'],
			// 'log_create' => $_POST['log_create'],
			// 'log_update' => $_POST['log_update'],
			// 'last_login' => $_POST['las_login']
		);

		$this->SuperAdm_model->updateuser($upd);

		redirect('SuperAdm/user');
	}


	public function impassesment(){
		$data['impasses'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		
		$data['asses'] = $this->SuperAdm_model->getimpassesment();
		$data['sum'] = $this->SuperAdm_model->getsumimpassesment();		
		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/imp_ass_superadmin', $data);
	}

	public function impm1(){
		$data['impm1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		
		$data['m1s'] = $this->SuperAdm_model->getimpm1();
		$data['asses'] = $this->SuperAdm_model->getimpassesment();

		$this->load->view('akses/admin/header_admin', $data);
		$this->load->view('akses/admin/imp_m1_superadmin', $data);
	}


	public function importassesment(){
		$this->SuperAdm_model->importass();
		redirect('superadm/impassesment');
	}

}