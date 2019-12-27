<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->library('Pdf');

		$sid = $this->session->userdata("username");

		$this->load->library('session');
 		
 		if ($this->session->userdata('username')) {
 			
		}else{
			redirect('login/loginadm', 'refresh');
		}
	}


	public function index()
	{
		$sid = $this->session->userdata("username");
		// var_dump($sid);exit;

		$data['active1'] = 'active';
		// var_dump($data);exit;

		$data['active2'] = '';
		// $data['active3'] = '';

		$data['profil'] = $this->Dashboard_model->getProfilProjek();
		$data['status'] = $this->Dashboard_model->getstatus();
		$data['statusinf'] = $this->Dashboard_model->getstatuscount();
		$data['usercount'] = $this->Dashboard_model->getusercount();
		$data['sektor'] = $this->Home_model->getSektor();
		$data['kategoricount'] = $this->Dashboard_model->getkategoricount();
		$data['sektorcount'] = $this->Dashboard_model->getsektorcount();

		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/dasboard_admin', $data);
	}

	public function datauser()
	{
		$data['active7'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';

		$data['profil'] = $this->Dashboard_model->getProfilProjek();
		$data['sektor'] = $this->Home_model->getSektor();
		$data['user'] = $this->Dashboard_model->getuser($_GET['filter_status']);

		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/data_pjpk', $data);
	}


	public function viewuser($idp)
	{
		$data['active1'] = '';
		$data['active7'] = 'active';
		//$data['daily'] = $this->Dashboard_model->getAll_DailyFlight();

		$data['profil'] = $this->Dashboard_model->getuserid($idp);

		$this->load->view('akses/admin/header_portal', $data);	
        $this->load->view('akses/admin/profiluser', $data);
	} 


	public function submissionpage()
	{
		$data['active1'] = '';
		$data['active2'] = 'active';
		$data['active3'] = '';
		$data['profil'] = $this->Dashboard_model->getProfilProjek($_GET['filter_status']);
		$data['user'] = $this->Dashboard_model->getuser();
		$data['adminpii'] = $this->Dashboard_model->getadminpii();
		$data['sektor'] = $this->Home_model->getSektor();
		$data['statusinf'] = $this->Dashboard_model->get_t_status_projek();

		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/submission_admin', $data);
	}

	public function submitprofilstatus($status)
	{
		$data['active1'] = '';
		$data['active2'] = '';
		$data['dataproyek'] = 'active'; 
		$data['active4'] = ''; 
		$data['active5'] = ''; 
		$data['active6'] = ''; 
		
		$data['user'] = $this->Dashboard_model->getuser();
		$data['adminpii'] = $this->Dashboard_model->getadminpii();
		$data['sektor'] = $this->Home_model->getSektor();
		$data['statusinf'] = $this->Dashboard_model->get_t_status_projek();

		$data['profil'] = $this->Dashboard_model->getProfilProjekStatus($_GET['filter_status'], $status);

		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/submission_admin2', $data);
	}

	public function submitprofilstatushigh($status)
	{
		$data['active1'] = '';
		$data['active2'] = '';
		$data['active3'] = 'active'; 
		$data['active4'] = ''; 
		$data['active5'] = ''; 
		$data['active6'] = ''; 
		
		$data['user'] = $this->Dashboard_model->getuser();
		$data['adminpii'] = $this->Dashboard_model->getadminpii();
		$data['sektor'] = $this->Home_model->getSektor();
		$data['statusinf'] = $this->Dashboard_model->get_t_status_projek();

		$data['profil'] = $this->Dashboard_model->getProfilProjekStatus($_GET['filter_status'], $status);

		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/submission_admin2', $data);
	}

	public function submitprofilstatusmedium($status)
	{
		$data['active1'] = '';
		$data['active2'] = '';
		$data['active3'] = ''; 
		$data['active4'] = 'active'; 
		$data['active5'] = ''; 
		$data['active6'] = ''; 
		
		$data['user'] = $this->Dashboard_model->getuser();
		$data['adminpii'] = $this->Dashboard_model->getadminpii();
		$data['sektor'] = $this->Home_model->getSektor();
		$data['statusinf'] = $this->Dashboard_model->get_t_status_projek();

		$data['profil'] = $this->Dashboard_model->getProfilProjekStatus($_GET['filter_status'], $status);

		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/submission_admin2', $data);
	}

	public function submitprofilstatuslow($status)
	{
		$data['active1'] = '';
		$data['active2'] = '';
		$data['active3'] = ''; 
		$data['active4'] = ''; 
		$data['active5'] = 'active'; 
		$data['active6'] = ''; 
		
		$data['user'] = $this->Dashboard_model->getuser();
		$data['adminpii'] = $this->Dashboard_model->getadminpii();
		$data['sektor'] = $this->Home_model->getSektor();
		$data['statusinf'] = $this->Dashboard_model->get_t_status_projek();

		$data['profil'] = $this->Dashboard_model->getProfilProjekStatus($_GET['filter_status'], $status);

		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/submission_admin2', $data);
	}

	public function submitprofilstatuskembali($status)
	{
		$data['active1'] = '';
		$data['active2'] = '';
		$data['active3'] = ''; 
		$data['active4'] = ''; 
		$data['active5'] = ''; 
		$data['active6'] = 'active'; 
		
		$data['user'] = $this->Dashboard_model->getuser();
		$data['adminpii'] = $this->Dashboard_model->getadminpii();
		$data['sektor'] = $this->Home_model->getSektor();
		$data['statusinf'] = $this->Dashboard_model->get_t_status_projek();

		$data['profil'] = $this->Dashboard_model->getProfilProjekStatus($_GET['filter_status'], $status);

		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/submission_admin2', $data);
	}

	public function completepage()
	{
		$data['active1'] = '';
		$data['active2'] = '';
		$data['active3'] = 'active';

		$this->load->view('akses/admin/header_portal');
        $this->load->view('akses/admin/complete_admin', $data);
	}

	public function DataProyek()
	{
		$data['active1'] = '';
		$data['active2'] = 'active';
		$data['active3'] = '';
		
		$this->load->view('akses/admin/header_portal');
        $this->load->view('akses/admin/data_proyek', $data);
	}

	public function FormVerifikasiProyek()
	{
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		//$data['daily'] = $this->Dashboard_model->getAll_DailyFlight();

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();

		$this->load->view('akses/admin/header_portal');		
        $this->load->view('akses/admin/form_periksa', $data);
	}


	public function formedit($idp)
	{
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		$data['active4'] = '';
		//$data['daily'] = $this->Dashboard_model->getAll_DailyFlight();

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['g1'] = $this->Home_model->gett1($idp);
		$data['g2'] = $this->Home_model->gett2($idp);
		$data['g3'] = $this->Home_model->gett3($idp);
		$data['g4'] = $this->Home_model->gett4($idp);
		$data['g5'] = $this->Home_model->gett5($idp);
		$data['g6'] = $this->Home_model->gett6($idp);
		$data['g7'] = $this->Home_model->gett7($idp);
		$data['g8'] = $this->Home_model->gett8($idp);
		$data['g9'] = $this->Home_model->gett9($idp);
		$data['g10'] = $this->Home_model->gett10($idp);
		$data['g11'] = $this->Home_model->gett11($idp);
		$data['g12'] = $this->Home_model->gett12($idp);
		$data['g13'] = $this->Home_model->gett13($idp);
		$data['g14'] = $this->Home_model->gett14($idp);
		$data['g15'] = $this->Home_model->gett15($idp);		

		$this->load->view('akses/admin/header_portal');
        $this->load->view('akses/admin/form_pengajuan_edit', $data);
	}


	public function formfinished($idp)
	{
		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		$data['active4'] = '';
		//$data['daily'] = $this->Dashboard_model->getAll_DailyFlight();

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['g1'] = $this->Home_model->gett1($idp);
		$data['g2'] = $this->Home_model->gett2($idp);
		$data['g3'] = $this->Home_model->gett3($idp);
		$data['g4'] = $this->Home_model->gett4($idp);
		$data['g5'] = $this->Home_model->gett5($idp);
		$data['g6'] = $this->Home_model->gett6($idp);
		$data['g7'] = $this->Home_model->gett7($idp);
		$data['g8'] = $this->Home_model->gett8($idp);
		$data['g9'] = $this->Home_model->gett9($idp);
		$data['g10'] = $this->Home_model->gett10($idp);
		$data['g11'] = $this->Home_model->gett11($idp);
		$data['g12'] = $this->Home_model->gett12($idp);
		$data['g13'] = $this->Home_model->gett13($idp);
		$data['g14'] = $this->Home_model->gett14($idp);
		$data['g15'] = $this->Home_model->gett15($idp);			

		$this->load->view('akses/admin/header_portal');
        $this->load->view('akses/admin/form_pengajuan_finish', $data);
	}


	public function formview($idp)
	{
		$data['active1'] = '';
		$data['active2'] = 'active';
		$data['active3'] = '';
		$data['active4'] = '';

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();
		$data['cn_assesment'] = $this->Home_model->cn_assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass'] = $this->Home_model->gett($idp);
		$data['totskor'] = $this->Dashboard_model->getsum($idp);

		$data['getrespon'] = $this->Home_model->getrespon($idp);
		$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);

		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/form_view_admin', $data);
	}

	public function formviewproyek($ss, $idp)
	{
		$data['active'] = 'active';
		$data['active2'] = '';

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();
		$data['cn_assesment'] = $this->Home_model->cn_assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass'] = $this->Home_model->gett($idp);
		$data['totskor'] = $this->Dashboard_model->getsum($idp);

		$data['getrespon'] = $this->Home_model->getrespon($idp);
		$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);
		$data['ss'] = $ss;
		
		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/form_view_admin2', $data);
	}

	public function formviewproyekhigh($ss, $idp)
	{
		$data['active3'] = 'active';
		$data['active2'] = '';

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();
		$data['cn_assesment'] = $this->Home_model->cn_assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass'] = $this->Home_model->gett($idp);
		$data['totskor'] = $this->Dashboard_model->getsum($idp);

		$data['getrespon'] = $this->Home_model->getrespon($idp);
		$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);
		$data['ss'] = $ss;
		
		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/form_view_admin2', $data);
	}

	public function formviewproyekmedium($ss, $idp)
	{
		$data['active4'] = 'active';
		$data['active2'] = '';

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();
		$data['cn_assesment'] = $this->Home_model->cn_assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass'] = $this->Home_model->gett($idp);
		$data['totskor'] = $this->Dashboard_model->getsum($idp);

		$data['getrespon'] = $this->Home_model->getrespon($idp);
		$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);
		$data['ss'] = $ss;
		
		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/form_view_admin2', $data);
	}

	public function formviewproyeklow($ss, $idp)
	{
		$data['active5'] = 'active';
		$data['active2'] = '';

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();
		$data['cn_assesment'] = $this->Home_model->cn_assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass'] = $this->Home_model->gett($idp);
		$data['totskor'] = $this->Dashboard_model->getsum($idp);

		$data['getrespon'] = $this->Home_model->getrespon($idp);
		$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);
		$data['ss'] = $ss;
		
		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/form_view_admin2', $data);
	}

	public function formviewproyekkembali($ss, $idp)
	{
		$data['active6'] = 'active';
		$data['active2'] = '';

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();
		$data['cn_assesment'] = $this->Home_model->cn_assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass'] = $this->Home_model->gett($idp);
		$data['totskor'] = $this->Dashboard_model->getsum($idp);

		$data['getrespon'] = $this->Home_model->getrespon($idp);
		$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);
		$data['ss'] = $ss;
		
		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/form_view_admin2', $data);
	}

	function zip()
	{
		$this->load->library('zip');

		foreach ($_GET['name'] as $key => $value)
		{
			$filepath[] = FCPATH.'upload/'.$value;
		}

		foreach($filepath as $file) {
		  $this->zip->read_file($file);
		}

		// Download the file to your desktop. Name it "my_backup.zip"
		$this->zip->download($_GET['filename']);
	}


	public function formfinal($idp)
	{
		$data['dataproyek'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		$data['active4'] = '';
		//$data['daily'] = $this->Dashboard_model->getAll_DailyFlight();

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();
		$data['cn_assesment'] = $this->Home_model->cn_assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass'] = $this->Home_model->gett($idp);
		$data['totskor'] = $this->Dashboard_model->getsum($idp);

		$data['getrespon'] = $this->Home_model->getrespon($idp);
		$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);

		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/form_pengajuan_final', $data);
	}

	public function addrespon(){

		$addres = array(
			'id_projek' => $_POST['id_projek'],
			'user1' => $_POST['user1'],
			'respon1' => $_POST['respon1'],
		);

		if($_POST['save'] == 'draft'){
			$status = 7;
		}else if($_POST['submit'] == 'submit'){
			$status = 8;
		}

		$this->Dashboard_model->insert_respon($addres, $status);

		redirect('Dashboard/formfinal/'.$_POST['id_projek']);
	}

	public function updaterespon(){

		$addres = array(
			'id_projek' => $_POST['id_projek'],
			'user1' => $_POST['user1'],
			'respon1' => $_POST['respon1'],
		);

		if($_POST['save'] == 'draft'){
			$status = 7;
		}else if($_POST['submit'] == 'submit'){
			$status = 8;
		}

		$this->Dashboard_model->update_respon($addres, $status);

		redirect('Dashboard/formfinal/'.$_POST['id_projek']);
	}

	public function updateresponap(){

		$addres = array(
			'id_projek' => $_POST['id_projek'],
			'user2' => $_POST['user2'],
			'respon2' => $_POST['respon2'],
		);

		if($_POST['save'] == 'draft'){
			$status = 8;
		}else if($_POST['submit'] == 'submit'){
			$status = 9;
		}

		$this->Dashboard_model->update_responap($addres, $status);

		redirect('Dashboard/formfinalsadmin/'.$_POST['id_projek']);
	}

	public function report($idp)
	{
		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['g1'] = $this->Home_model->gett1($idp);
		$data['g2'] = $this->Home_model->gett2($idp);
		$data['g3'] = $this->Home_model->gett3($idp);
		$data['g4'] = $this->Home_model->gett4($idp);
		$data['g5'] = $this->Home_model->gett5($idp);
		$data['g6'] = $this->Home_model->gett6($idp);
		$data['g7'] = $this->Home_model->gett7($idp);
		$data['g8'] = $this->Home_model->gett8($idp);
		$data['g9'] = $this->Home_model->gett9($idp);
		$data['g10'] = $this->Home_model->gett10($idp);
		$data['g11'] = $this->Home_model->gett11($idp);
		$data['g12'] = $this->Home_model->gett12($idp);
		$data['g13'] = $this->Home_model->gett13($idp);
		$data['g14'] = $this->Home_model->gett14($idp);
		$data['g15'] = $this->Home_model->gett15($idp);			

		
		$this->load->view('akses/admin/header_portal');
        $this->load->view('akses/report/laporan_userpjpk', $data);
	}


	public function statusprofil($idp)
	{

		$addprof = array(
			'id_projek' => $_POST['id_projek'],
			'status' => $_POST['status'],
			'rekomendasi' => $_POST['rekomendasi'],
			'skor' => $_POST['skor'],
			'id_adm' => $_POST['id_adm']
		);

		$this->Dashboard_model->updatestatus_profil($addprof);

		redirect('Dashboard/submissionpage');
	}

	public function statusfinal($idp)
	{

		$addprof = array(
			'id_projek' => $_POST['id_projek'],
			'status' => $_POST['status']
		);

		$this->Dashboard_model->updatestatus_profil($addprof);

		redirect('Dashboard/submissionpage');
	}

	public function formfinalsadmin($idp)
	{
		$data['dataproyek'] = 'active';
		$data['active2'] = '';
		$data['active3'] = '';
		$data['active4'] = '';
		

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();
		$data['cn_assesment'] = $this->Home_model->cn_assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass'] = $this->Home_model->gett($idp);
		$data['totskor'] = $this->Dashboard_model->getsum($idp);

		$data['getrespon'] = $this->Home_model->getrespon($idp);
		$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);		


		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/formfinalsadmin', $data);
	}

	public function formfinalsadminview($idp)
	{
		$data['dataproyek'] = '';
		$data['active2'] = 'active';
		$data['active3'] = '';
		$data['active4'] = '';
		

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();
		$data['cn_assesment'] = $this->Home_model->cn_assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass'] = $this->Home_model->gett($idp);
		$data['totskor'] = $this->Dashboard_model->getsum($idp);

		$data['getrespon'] = $this->Home_model->getrespon($idp);
		$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);		


		$this->load->view('akses/admin/header_portal', $data);
        $this->load->view('akses/admin/formfinalsadmin', $data);
	}

	public function statusprofiladm($idp)
	{

		$addprof = array(
			'id_projek' => $_POST['id_projek'],
			'status' => $_POST['status'],
			'rekomendasi_sadm' => $_POST['rekomendasi_sadm'],
			'total_skor' => $_POST['tskor'],
			'id_adm' => $_POST['id_adm']
		);

		$this->Dashboard_model->updatestatus_profiladm($addprof);

		$this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'ssl://smtp.gmail.com:465';
        $mail->SMTPAuth = true;
 		$mail->Username = 'iigfirisk@gmail.com';
        $mail->Password = 'R15k.2017';
        //$mail->SMTPSecure = 'tls';
        //$mail->Port     = 587;
        
        $mail->setFrom('iigfirisk@gmail.com', 'PII SIP');
        //$mail->addReplyTo('');
        
        // Add a recipient
        $mail->addAddress($_POST['email']);
        
        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Respons from PII SIP';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = "Nama Projek&nbsp;:&nbsp;".$_POST['nama_projek']."<br>Lokasi&nbsp;:&nbsp;". $_POST['lokasi']."<br>Respons&nbsp;:&nbsp;". $_POST['rekomendasi_sadm']."";
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            //echo 'Message could not be sent.';
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
             echo $this->session->set_flashdata('msg','gagal');
             redirect('Dashboard/submissionpage');
        }

		redirect('Dashboard/submissionpage');
	}


	public function submissionpagePDF()
	{

		$this->load->library('pdfgenerator');

		$data['profil'] = $this->Dashboard_model->getProfilProjek($_GET['filter_status']);
		$data['sektor'] = $this->Home_model->getSektor();

		$this->load->view('akses/admin/header_portal');
        $this->load->view('akses/admin/submission_admin', $data);

        $html = $this->load->view('akses/admin/submission_pdf', $data, true);

        $this->pdfgenerator->generate($html,'Data Proyek');
	}

	public function submissionpageview()
	{


		$data['profil'] = $this->Dashboard_model->getProfilProjek();
		$data['sektor'] = $this->Home_model->getSektor();

		$this->load->view('akses/admin/header_portal');
        $this->load->view('akses/admin/submission_admin', $data);

        $this->load->view('akses/admin/submission_pdf', $data);

	}

	function FormVerifikasiProyekPDF($idp)
	{
		$this->load->library('pdfgenerator');
		

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass0'] = $this->Home_model->gett1($idp);
		$data['noass1'] = $this->Home_model->gett2($idp);
		$data['noass2'] = $this->Home_model->gett3($idp);
		$data['noass3'] = $this->Home_model->gett4($idp);
		$data['noass4'] = $this->Home_model->gett5($idp);
		$data['noass5'] = $this->Home_model->gett6($idp);
		$data['noass6'] = $this->Home_model->gett7($idp);
		$data['noass7'] = $this->Home_model->gett8($idp);
		$data['noass8'] = $this->Home_model->gett9($idp);
		$data['noass9'] = $this->Home_model->gett10($idp);
		$data['noass10'] = $this->Home_model->gett11($idp);
		$data['noass11'] = $this->Home_model->gett12($idp);
		$data['noass12'] = $this->Home_model->gett13($idp);
		$data['noass13'] = $this->Home_model->gett14($idp);
		$data['noass14'] = $this->Home_model->gett15($idp);	

		$data['getrespon'] = $this->Home_model->getrespon($idp);	

		$html = $this->load->view('akses/admin/form_periksa_pdf', $data, true);

	    $this->pdfgenerator->generate($html,'report');
	}

	function FormVerifikasiProyekPDF2($idp)
	{
		$this->load->library('pdfgenerator');
		
		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass0'] = $this->Home_model->gett1($idp);
		$data['noass1'] = $this->Home_model->gett2($idp);
		$data['noass2'] = $this->Home_model->gett3($idp);
		$data['noass3'] = $this->Home_model->gett4($idp);
		$data['noass4'] = $this->Home_model->gett5($idp);
		$data['noass5'] = $this->Home_model->gett6($idp);
		$data['noass6'] = $this->Home_model->gett7($idp);
		$data['noass7'] = $this->Home_model->gett8($idp);
		$data['noass8'] = $this->Home_model->gett9($idp);
		$data['noass9'] = $this->Home_model->gett10($idp);
		$data['noass10'] = $this->Home_model->gett11($idp);
		$data['noass11'] = $this->Home_model->gett12($idp);
		$data['noass12'] = $this->Home_model->gett13($idp);
		$data['noass13'] = $this->Home_model->gett14($idp);
		$data['noass14'] = $this->Home_model->gett15($idp);	
		$data['getrespon'] = $this->Home_model->getrespon($idp);
		$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);	

		$html = $this->load->view('akses/admin/form_periksa_pdf2', $data, true);
	    $this->pdfgenerator->generate($html,'report');
	}

	function FormVerifikasiProyekView($idp)
	{

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profiladm'] = $this->Dashboard_model->getIdProfilProjekadm($idp);
		$data['profiladm2'] = $this->Dashboard_model->getIdProfilProjekadm2($idp);
		$data['g1'] = $this->Home_model->gett1($idp);
		$data['g2'] = $this->Home_model->gett2($idp);
		$data['g3'] = $this->Home_model->gett3($idp);
		$data['g4'] = $this->Home_model->gett4($idp);
		$data['g5'] = $this->Home_model->gett5($idp);
		$data['g6'] = $this->Home_model->gett6($idp);
		$data['g7'] = $this->Home_model->gett7($idp);
		$data['g8'] = $this->Home_model->gett8($idp);
		$data['g9'] = $this->Home_model->gett9($idp);
		$data['g10'] = $this->Home_model->gett10($idp);
		$data['g11'] = $this->Home_model->gett11($idp);
		$data['g12'] = $this->Home_model->gett12($idp);
		$data['g13'] = $this->Home_model->gett13($idp);
		$data['g14'] = $this->Home_model->gett14($idp);
		$data['g15'] = $this->Home_model->gett15($idp);		
			
		 $this->load->view('akses/admin/form_periksa_pdf', $data);
	}

	// function FormVerifikasiProyekView2($idp)
	// {

	// 	$data['sektor'] = $this->Home_model->getSektor();
	// 	$data['kementerian'] = $this->Home_model->getKementerian();
	// 	$data['lpnk'] = $this->Home_model->getNonKementrian();
	// 	$data['provinsi'] = $this->Home_model->getProvinsi();
	// 	$data['kota'] = $this->Home_model->getKota();	
	// 	$data['kabupaten'] = $this->Home_model->getKabupaten();	
	// 	$data['kotakabu'] = $this->Home_model->getKotaKabu();
	// 	$data['assesment'] = $this->Home_model->assesment();	
	// 	$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
	// 	$data['profiladm'] = $this->Dashboard_model->getIdProfilProjekadm($idp);
	// 	$data['profiladm2'] = $this->Dashboard_model->getIdProfilProjekadm2($idp);
	// 	$data['g1'] = $this->Home_model->gett1($idp);
	// 	$data['g2'] = $this->Home_model->gett2($idp);
	// 	$data['g3'] = $this->Home_model->gett3($idp);
	// 	$data['g4'] = $this->Home_model->gett4($idp);
	// 	$data['g5'] = $this->Home_model->gett5($idp);
	// 	$data['g6'] = $this->Home_model->gett6($idp);
	// 	$data['g7'] = $this->Home_model->gett7($idp);
	// 	$data['g8'] = $this->Home_model->gett8($idp);
	// 	$data['g9'] = $this->Home_model->gett9($idp);
	// 	$data['g10'] = $this->Home_model->gett10($idp);
	// 	$data['g11'] = $this->Home_model->gett11($idp);
	// 	$data['g12'] = $this->Home_model->gett12($idp);
	// 	$data['g13'] = $this->Home_model->gett13($idp);
	// 	$data['g14'] = $this->Home_model->gett14($idp);
	// 	$data['g15'] = $this->Home_model->gett15($idp);

	// 	$data['getrespon'] = $this->Home_model->getrespon($idp);
	// 	$data['resadmin'] = $this->Dashboard_model->getresadmin($idp);
			
	// 	 $this->load->view('akses/admin/form_periksa_pdf2', $data);
	// }

	public function listKotabu(){
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_provinsi = $this->input->post('id_provinsi');
		
		$kotakabu = $this->Home_model->viewByKotabuProvinsi($id_provinsi);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$lists = "<option value=''>--Pilih--</option>";
		
		foreach($kotakabu as $data){
			$lists .= "<option value='".$data->id_kotakabu."'>".$data->nama_daerah."</option>"; // Tambahkan tag option ke variabel $lists
		}
		
		$callback = array('list_kotakabu'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	public function kotakabu_edit(){
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_provinsi = $this->input->post('id_provinsi');
		$n_kotakabu = $this->input->post('n_kotakabu');
		
		$kotakabu = $this->Home_model->viewByKotabuProvinsi($id_provinsi);
		$kotabu_edit = $this->Home_model->viewByKotabuProvinsi_edit($id_provinsi, $n_kotakabu);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$lists = "<option value=''>--Pilih--</option>";
		
		foreach ($kotabu_edit as $rowp) {
		
			foreach($kotakabu as $data){
				if($data->id_kotakabu == $rowp->id_kotakabu){
					$lists .= "<option value='".$data->id_kotakabu."' selected>".$data->nama_daerah."</option>"; // Tambahkan tag option ke variabel $lists
				}else{
					$lists .= "<option value='".$data->id_kotakabu."'>".$data->nama_daerah."</option>"; // Tambahkan tag option ke variabel $lists
				}
			}
		}
		
		$callback = array('list_kotakabu'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	public function listSubsektor(){
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_sektor = $this->input->post('id_sektor');
		
		$subsektor = $this->Home_model->viewBySubsektor($id_sektor);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$lists = "<option value=''>--Pilih--</option>";
		
		foreach($subsektor as $data){
			$lists .= "<option value='".$data->id_subsektor."' data-sub='".$data->nama_subsektor."'>".$data->nama_subsektor."</option>"; // Tambahkan tag option ke variabel $lists
		}
		
		$callback = array('list_subsektor'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	public function listSubsektor_edit(){
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_sektor = $this->input->post('id_sektor');
		$id_subsektor = $this->input->post('id_subsektor');
		
		$subsektor = $this->Home_model->viewBySubsektor($id_sektor);
		$subsektor_edit = $this->Home_model->viewBySubsektor_edit($id_sektor, $id_subsektor);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$lists = "<option value=''>--Pilih--</option>";
		foreach ($subsektor_edit as $rowp) {
			foreach($subsektor as $data){
				if($data->id_subsektor == $rowp->id_subsektor){
					$lists .= "<option value='".$data->id_subsektor."' data-sub='".$data->nama_subsektor."' selected>".$data->nama_subsektor."</option>"; // Tambahkan tag option ke variabel $lists
				}else{
					$lists .= "<option value='".$data->id_subsektor."' data-sub='".$data->nama_subsektor."'>".$data->nama_subsektor."</option>"; // Tambahkan tag option ke variabel $lists
				}
			}
		}
		
		$callback = array('list_subsektor'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}


	public function blokuser()
	{
		$this->Dashboard_model->updateblockuser($_POST['id'], $_POST['status_block']);

		$this->datauser();
	}

	public function saveapproval(){
		$q1 = "delete from t_adminapp where id_projek = ".$_POST['id_project'];
		$q1 = $this->db->query($q1);
		$this->db->query("UPDATE t_projekprofil SET status = 4 WHERE id_projek = ".$_POST['id_project']);
		$this->db->query("insert into t_adminapp (id_projek, role) values (".$_POST['id_project'].", ".$_POST['role'].")");
		return true;
	}

	public function saveapprovaluser(){
		if($_POST['komen1'] == '' || $_POST['komen1'] == null){
			return false;
		}else{
			$q1 = "delete from t_adminuser where id_projek = ".$_POST['id_project'];
			$q1 = $this->db->query($q1);
	
			if($_POST['xxi_xxi'] == 4){
				$this->db->query("UPDATE t_projekprofil SET status = 7, komen1 = '".$_POST['komen1']."' WHERE id_projek = ".$_POST['id_project']);
				foreach ($_POST['username'] as $key => $value) {
					$this->db->query("insert into t_adminuser (id_projek, username) values (".$_POST['id_project'].", '".$value."')");
				}
			}else{
				$this->db->query("UPDATE t_projekprofil SET status = 6, komen1 = '".$_POST['komen1']."' WHERE id_projek = ".$_POST['id_project']);
				foreach ($_POST['username'] as $key => $value) {
					$this->db->query("insert into t_adminuser (id_projek, username) values (".$_POST['id_project'].", '".$value."')");
				}
			}
			return true;
		}
		// $this->db->query("UPDATE t_projekprofil SET status = 7, komen1 = '".$_POST['komen1']."' WHERE id_projek = ".$_POST['id_project']);
		// foreach ($_POST['username'] as $key => $value) {
		// 	$this->db->query("insert into t_adminuser (id_projek, username) values (".$_POST['id_project'].", '".$value."')");
		// }
	}

	public function backtoadmin(){
		$this->db->query("UPDATE t_projekprofil SET status = 5, komen = '".$_POST['komen']."' WHERE id_projek = ".$_POST['id_project']);
	}

}