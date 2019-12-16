<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        
        $this->load->model('Home_model');
        $this->load->model('Dashboard_model');

        $sid = $this->session->userdata("id_user");

        $this->load->library('session');
 		
 		if ($this->session->userdata('id_user')) {


		}else{

        	$this->session->sess_destroy();
			redirect('login', 'refresh');
		}

	}


	public function index()
	{
		$sid = $this->session->userdata("id_user");

		$data['active1'] = 'active';
		$data['active2'] = '';
		$data['profil'] = $this->Home_model->getProfilProjek($sid, $_GET['filter_status']);
		$data['sektor'] = $this->Home_model->getSektor();
		$data['statusinf'] = $this->Dashboard_model->getstatuscount();

		$this->load->view('akses/user/header_user', $data);	
        $this->load->view('akses/user/page_user', $data);
	}

	public function submitted()
	{
		$data['active1'] = '';
		$data['active2'] = 'active';
		$data['active3'] = '';
		$data['active4'] = '';
		//$data['daily'] = $this->Dashboard_model->getAll_DailyFlight();
		$this->load->view('akses/user/header_user');	
        $this->load->view('akses/user/submitted_user', $data);
	}


	public function form_add()
	{
		$data['active1'] = 'active';
		$data['active2'] = '';
		//$data['daily'] = $this->Dashboard_model->getAll_DailyFlight();

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['assesment'] = $this->Home_model->assesment();
		$data['cn_assesment'] = $this->Home_model->cn_assesment();
		$data['noass'] = $this->Home_model->getno();

		$this->load->view('akses/user/header_user', $data);	
        $this->load->view('akses/user/form_pengajuan', $data);
	}

	public function form_edit($idp)
	{
		$data['active1'] = 'active';
		$data['active2'] = '';
		
		$sid = $this->session->userdata("id_user");

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

		if($this->Home_model->getIdProfilProjekUser($idp, $sid) == TRUE){
			
			$this->load->view('akses/user/header_user', $data);	
        	$this->load->view('akses/user/form_pengajuan_edit', $data);

		}else{
			redirect('Home');
		}	
	}

	public function formfinished($idp)
	{

		$data['active1'] = 'active';
		$data['active2'] = '';
		
		$sid = $this->session->userdata("id_user");

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

		$data['getrespon'] = $this->Home_model->getrespon($idp);

		if($this->Home_model->getIdProfilProjekUser($idp, $sid) == TRUE){
			
			$this->load->view('akses/user/header_user', $data);	
       		$this->load->view('akses/user/form_finished', $data);

		}else{
			redirect('Home');
		}		

	}


	public function action_addprofil()
	{
		if($_POST['kt'] == 1){

			if($_POST['jenis'] == 'Kementerian'){
				$jn = $_POST['kementerian'];
				$jl = NULL;
			}
			else if($_POST['jenis'] == 'Lembaga'){
				$jn = NULL;
				$jl = $_POST['lembaga'];
			}

			$addktprof = array(
				'bumn_text' => NULL,
				'bumd_text' => NULL,
				'lainnya_text' => NULL,
				'jenis' => $_POST['jenis'],
				'n_kementerian' => $jn,
				'n_lembaga' => $jl,
				'n_provinsi' => NULL,
				'n_kotakabu' => NULL
			);

		}else if($_POST['kt'] == 2){

			$addktprof = array(
				'bumn_text' => NULL,
				'bumd_text' => NULL,
				'lainnya_text' => NULL,
				'jenis' => NULL,
				'n_kementrian' => NULL,
				'n_lembaga' => NULL,
				'n_provinsi' => $_POST['provinsi'],
				'n_kotakabu' => $_POST['kotabu']
			);

		}else if($_POST['kt'] == 3){

			$addktprof = array(
				'bumn_text' => $_POST['bumn'],
				'bumd_text' => NULL,
				'lainnya_text' => NULL,
				'jenis' => NULL,
				'n_kementrian' => NULL,
				'n_lembaga' => NULL,
				'n_provinsi' => NULL,
				'n_kotakabu' => NULL
			);

		}else if($_POST['kt'] == 4){

			$addktprof = array(
				'bumn_text' => NULL,
				'bumd_text' => $_POST['bumd'],
				'lainnya_text' => NULL,
				'jenis' => NULL,
				'n_kementrian' => NULL,
				'n_lembaga' => NULL,
				'n_provinsi' => NULL,
				'n_kotakabu' => NULL
			);

		}else if($_POST['kt'] == 5){

			$addktprof = array(
				'bumn_text' => NULL,
				'bumd_text' => NULL,
				'lainnya_text' => $_POST['lainnya'],
				'jenis' => NULL,
				'n_kementrian' => NULL,
				'n_lembaga' => NULL,
				'n_provinsi' => NULL,
				'n_kotakabu' => NULL
			);

		}

		$addprof = array(
			'nama_pj' => $_POST['nama_pj'],
			'kt' => $_POST['kt'],
			'sektor' => $_POST['sektor'],
			'subsektor' => $_POST['subsektor'],
			'subsektorln' => $_POST['subsektorln'],
			'nama_proyek' => $_POST['nama_proyek'],
			'lokasi' => $_POST['lokasi'],
			'estimasi' => $_POST['estimasi'],
			'nama' => $_POST['nama'],
			'telepon' => $_POST['telepon'],
			'jabatan' => $_POST['jabatan'],
			'next' => $_POST['next'],
		);

		$id = $this->Home_model->insert_profil($addprof, $addktprof);

		$i = -1;
		foreach ($_POST['id_ass'] as $key => $value) {
			$i++;

			if($_POST['p'.$i]=='Y'){
				$_POST['Y'][$key] = "checked";
				$_POST['N'][$key] = "nonchecked";
				$_POST['bobot'][$key];
				$_POST['respon'][$key] = '';
			}else if($_POST['p'.$i]=='N'){
				$_POST['Y'][$key] = "nonchecked";
				$_POST['N'][$key] = "checked";
				$_POST['bobot'][$key] = 0;
				$_POST['respon'][$key];
			}else{
				$_POST['Y'][$key] = "nonchecked";
				$_POST['N'][$key] = "nonchecked";
				$_POST['bobot'][$key] = 0;
				$_POST['respon'][$key];
			}

			// echo $value.'&nbsp;|&nbsp;'.$_POST['section'][$key].'&nbsp;|&nbsp;'.$_POST['nomor'][$key].'&nbsp;|&nbsp;'.$_POST['pertanyaan'][$key].'&nbsp;|&nbsp;'.$_POST['intruksi_upload'][$key].'&nbsp;|&nbsp;'.$_POST['penjelasan'][$key].'&nbsp;|&nbsp;'.$_POST['informasi_upload'][$key].'&nbsp;|&nbsp;'.$_POST['p'.$i].'&nbsp;|&nbsp;'.$_POST['Y'][$key].'&nbsp;|&nbsp;'.$_POST['N'][$key].'&nbsp;|&nbsp;'.$_POST['bobot'][$key].'&nbsp;|&nbsp;'.$_POST['respon'][$key].'&nbsp;|&nbsp;'.$_POST['s_upload'][$key].'<br>';

			$sql = "INSERT INTO `t_skor`(`id_projek`, `idass`, `section`, `nomor_urut`, `creteria`, `intruksi_upload`, `penjelasan`, `informasi_upload`, `pilihan`, `Y`, `N`, `skor`, `respon`, `s_upload`) 
			VALUES ('".$id."','".$value."','".$_POST['section'][$key]."','".$_POST['nomor'][$key]."','".$_POST['pertanyaan'][$key]."','".$_POST['intruksi_upload'][$key]."','".$_POST['penjelasan'][$key]."','".$_POST['informasi_upload'][$key]."','".$_POST['p'.$i]."','".$_POST['Y'][$key]."','".$_POST['N'][$key]."','".$_POST['bobot'][$key]."','".$_POST['respon'][$key]."','".$_POST['s_upload'][$key]."');";

			$query = $this->db->query($sql);
		}
		
		foreach ($_POST['box1'] as $key => $value) {
			// echo $value.'&nbsp;|&nbsp;'.$_POST['box2'][$key].'&nbsp;|&nbsp;'.$_POST['box3'][$key].'&nbsp;|&nbsp;'.$_POST['box4'][$key].'&nbsp;|&nbsp;'.$_POST['box5'][$key].'&nbsp;|&nbsp;'.$_POST['box6'][$key].'<br>';

			$sql = "INSERT INTO `t_m1profil`(`id_projek`, `idass`, `nomor_urut`, `urut`, `a`, `b`, `status`) VALUES ('".$id."','".$_POST['box2'][$key]."','".$_POST['box3'][$key]."','".$_POST['box7'][$key]."','".$_POST['box4'][$key]."','".$_POST['box5'][$key]."','".$_POST['box6'][$key]."');"; 

			$query = $this->db->query($sql);
		}

		$sql = "UPDATE `t_projekprofil` SET `total_skor`=(SELECT SUM(skor) FROM t_skor WHERE  id_projek = '".$id."') WHERE id_projek = '".$id."'";
		$query = $this->db->query($sql);


		if($_POST['next'] == 'next'){
			redirect('Home/nextinclomplete2/'.$id);
		}else{
			redirect('Home');
		}
	}


	public function action_updateprofil()
	{

		if($_POST['kt'] == 1){

			if($_POST['jenis'] == 'Kementerian'){
				$jn = $_POST['kementerian'];
				$jl = NULL;
			}
			else if($_POST['jenis'] == 'Lembaga'){
				$jn = NULL;
				$jl = $_POST['lembaga'];
			}

			$addktprof = array(
				'bumn_text' => NULL,
				'bumd_text' => NULL,
				'lainnya_text' => NULL,
				'jenis' => $_POST['jenis'],
				'n_kementerian' => $jn,
				'n_lembaga' => $jl,
				'n_provinsi' => NULL,
				'n_kotakabu' => NULL
			);

		}else if($_POST['kt'] == 2){

			$addktprof = array(
				'bumn_text' => NULL,
				'bumd_text' => NULL,
				'lainnya_text' => NULL,
				'jenis' => NULL,
				'n_kementrian' => NULL,
				'n_lembaga' => NULL,
				'n_provinsi' => $_POST['provinsi'],
				'n_kotakabu' => $_POST['kotabu']
			);

		}else if($_POST['kt'] == 3){

			$addktprof = array(
				'bumn_text' => $_POST['bumn'],
				'bumd_text' => NULL,
				'lainnya_text' => NULL,
				'jenis' => NULL,
				'n_kementrian' => NULL,
				'n_lembaga' => NULL,
				'n_provinsi' => NULL,
				'n_kotakabu' => NULL
			);

		}else if($_POST['kt'] == 4){

			$addktprof = array(
				'bumn_text' => NULL,
				'bumd_text' => $_POST['bumd'],
				'lainnya_text' => NULL,
				'jenis' => NULL,
				'n_kementrian' => NULL,
				'n_lembaga' => NULL,
				'n_provinsi' => NULL,
				'n_kotakabu' => NULL
			);

		}else if($_POST['kt'] == 5){

			$addktprof = array(
				'bumn_text' => NULL,
				'bumd_text' => NULL,
				'lainnya_text' => $_POST['lainnya'],
				'jenis' => NULL,
				'n_kementrian' => NULL,
				'n_lembaga' => NULL,
				'n_provinsi' => NULL,
				'n_kotakabu' => NULL
			);

		}

		if($_POST['subsub'] == 'Lainnya' || $_POST['subsub'] == 'lainnya' ){

			 $subsektorln = $_POST['subsektorln'];
		}else{
			 $subsektorln = '';
		}

		$addprof = array(
			'id_projek' => $_POST['id_projek'],
			'nama_pj' => $_POST['nama_pj'],
			'kt' => $_POST['kt'],
			'sektor' => $_POST['sektor'],
			'subsektor' => $_POST['subsektor'],
			'subsektorln' => $subsektorln,
			'nama_proyek' => $_POST['nama_proyek'],
			'lokasi' => $_POST['lokasi'],
			'estimasi' => $_POST['estimasi'],
			'nama' => $_POST['nama'],
			'telepon' => $_POST['telepon'],
			'jabatan' => $_POST['jabatan'],
			'next' => $_POST['next']
		);

		$rid = $this->Home_model->update_profil($addprof, $addktprof);

		$sql = "DELETE FROM `t_skor` WHERE `id_projek` = '".$_POST['id_projek']."'";
		$query = $this->db->query($sql);

		$sql = "DELETE FROM `t_m1profil` WHERE `id_projek` = '".$_POST['id_projek']."'";
		$query = $this->db->query($sql);		

		$i = -1;
		foreach ($_POST['id_ass'] as $key => $value) {
			$i++;

			if($_POST['p'.$i]=='Y'){
				$_POST['Y'][$key] = "checked";
				$_POST['N'][$key] = "nonchecked";
				$_POST['bobot'][$key];
				$_POST['respon'][$key] = '';
			}else if($_POST['p'.$i]=='N'){
				$_POST['Y'][$key] = "nonchecked";
				$_POST['N'][$key] = "checked";
				$_POST['bobot'][$key] = 0;
				$_POST['respon'][$key];
			}else{
				$_POST['Y'][$key] = "nonchecked";
				$_POST['N'][$key] = "nonchecked";
				$_POST['bobot'][$key] = 0;
				$_POST['respon'][$key];
			}

			$sql = "INSERT INTO `t_skor`(`id_projek`, `idass`, `section`, `nomor_urut`, `creteria`, `intruksi_upload`, `penjelasan`, `informasi_upload`, `pilihan`, `Y`, `N`, `skor`, `respon`, `s_upload`) 
			VALUES ('".$rid."','".$value."','".$_POST['section'][$key]."','".$_POST['nomor'][$key]."','".$_POST['pertanyaan'][$key]."','".$_POST['intruksi_upload'][$key]."','".$_POST['penjelasan'][$key]."','".$_POST['informasi_upload'][$key]."','".$_POST['p'.$i]."','".$_POST['Y'][$key]."','".$_POST['N'][$key]."','".$_POST['bobot'][$key]."','".$_POST['respon'][$key]."','".$_POST['s_upload'][$key]."');";

			$query = $this->db->query($sql);
		}
		
		foreach ($_POST['box1'] as $key => $value) {

			$sql = "INSERT INTO `t_m1profil`(`id_projek`, `idass`, `nomor_urut`, `urut`, `a`, `b`, `status`) VALUES ('".$rid."','".$_POST['box2'][$key]."','".$_POST['box3'][$key]."','".$_POST['box7'][$key]."','".$_POST['box4'][$key]."','".$_POST['box5'][$key]."','".$_POST['box6'][$key]."');"; 

			$query = $this->db->query($sql);
		}

		$sql = "UPDATE `t_projekprofil` SET `total_skor`=(SELECT SUM(skor) FROM t_skor WHERE  id_projek = '".$rid."') WHERE id_projek = '".$rid."'";
		$query = $this->db->query($sql);

		if($_POST['next'] == 'next'){
			redirect('Home/nextinclomplete2/'.$rid);
		}else{
			redirect('Home/form_edit/'.$rid);
		}
	}


		public function statusprofil($idp)
	{

		$addprof = array(
			'id_projek' => $_POST['id_projek'],
			'status' => $_POST['status']
		);

		$this->Home_model->updatestatus_profil($addprof);

		redirect('Home');
	}

	public function form_incomplete()
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

		$this->load->view('akses/user/header_user');	
        $this->load->view('akses/user/form_incomplete', $data);
	}

/*	public function nextinclomplete()
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

		$this->load->view('akses/user/header_user');	
        $this->load->view('akses/user/form_next', $data);
	}
*/


	public function nextinclomplete2($idp)
	{
		$data['active1'] = 'active';
		$data['active2'] = '';
		
		$sid = $this->session->userdata("id_user");

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesmentskor_u($idp);
		$data['cn_assesment'] = $this->Home_model->cn_assesmentskor_u($idp);	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noass'] = $this->Home_model->gett($idp);
		$data['noassu0'] = $this->Home_model->gettu3($idp);
		$data['noassu1'] = $this->Home_model->gettu5($idp);
		$data['noassu2'] = $this->Home_model->gettu6($idp);
		$data['noassu3'] = $this->Home_model->gettu7($idp);
		$data['noassu4'] = $this->Home_model->gettu8($idp);
		$data['noassu5'] = $this->Home_model->gettu9($idp);
		$data['noassu6'] = $this->Home_model->gettu13($idp);
		$data['noassu7'] = $this->Home_model->gettu14($idp);
		$data['noassu8'] = $this->Home_model->gettu15($idp);

		$data['getrespon'] = $this->Home_model->getrespon($idp);


		if($this->Home_model->getIdProfilProjekUser($idp, $sid) == TRUE){
			
			$this->load->view('akses/user/header_user', $data);	
       		$this->load->view('akses/user/form_next3', $data);

		}else{
			redirect('Home');
		}	
	}

/*	public function nextcomplete()
	{
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'jpg|png|jpeg|pdf|zip';
		$this->load->library('upload', $config);
		if ( isset($_FILES['file3']) )
		{
			// Gambar 3
			$config['file_name'] = $this->input->post('kode_proyek').'_No3';
			$this->upload->initialize($config);
			if ( $_FILES['file3']['name'] != '' OR !isset($_POST['ada3']) )
			{
				if ( isset($_POST['ada3']) AND !empty($_POST['ada3']) )
				{
					unlink("assets/upload/".$_POST['ada3']);
				}
				if ( !$this->upload->do_upload('file3')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('msg', 'Format file only jpg/png/jpeg/pdf/zip');
					redirect('Home/nextinclomplete2/'.$this->input->post('id_projek'));
				}
				$temp = $this->upload->data();
				$data[3] = $temp['file_name'];
			}
		}

		if ( isset($_FILES['file4']) )
		{
			// Gambar 4
			$config['file_name'] = $this->input->post('kode_proyek').'_No4';
			$this->upload->initialize($config);
			if ( $_FILES['file4']['name'] != '' OR !isset($_POST['ada4']) )
			{
				if ( isset($_POST['ada4']) AND !empty($_POST['ada4']) )
				{
					unlink("assets/upload/".$_POST['ada4']);
				}
				if ( !$this->upload->do_upload('file4')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('msg', 'Format file only jpg/png/jpeg/pdf/zip');
					redirect('Home/nextinclomplete2/'.$this->input->post('id_projek'));
				}
				$temp = $this->upload->data();
				$data[4] = $temp['file_name'];
			}
		}

		if ( isset($_FILES['file7']) )
		{
			// Gambar 7
			$config['file_name'] = $this->input->post('kode_proyek').'_No7';
			$this->upload->initialize($config);
			if ( $_FILES['file7']['name'] != '' OR !isset($_POST['ada7']) )
			{
				if ( isset($_POST['ada7']) AND !empty($_POST['ada7']) )
				{
					unlink("assets/upload/".$_POST['ada7']);
				}
				if ( !$this->upload->do_upload('file7')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('msg', 'Format file only jpg/png/jpeg/pdf/zip');
					redirect('Home/nextinclomplete2/'.$this->input->post('id_projek'));
				}
				$temp = $this->upload->data();
				$data[7] = $temp['file_name'];
			}
		}

		$data['id_projek'] = $this->input->post('id_projek');
		$data['status'] = $this->input->post('status');
		$this->Home_model->nextcomplete($data);

		$this->index();
	}
*/

	public function listKota(){
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_provinsi = $this->input->post('id_provinsi');
		
		$kota = $this->Home_model->viewByProvinsi($id_provinsi);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$lists = "<option value=''>--Pilih--</option>";
		
		foreach($kota as $data){
			$lists .= "<option value='".$data->id_kota."'>".$data->nama_kota."</option>"; // Tambahkan tag option ke variabel $lists
		}
		
		$callback = array('list_kota'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}



	public function listKota_edit(){
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_provinsi = $this->input->post('id_provinsi');
		$n_kota = $this->input->post('n_kota');
		
		$kota = $this->Home_model->viewByProvinsi($id_provinsi);
		$kota_edit = $this->Home_model->viewByProvinsi_edit($id_provinsi, $n_kota);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$lists = "<option value=''>--Pilih--</option>";
		
		foreach ($kota_edit as $rowp) {
		
			foreach($kota as $data){
				if($data->id_kota == $rowp->id_kota){
					$lists .= "<option value='".$data->id_kota."' selected>".$data->nama_kota."</option>"; // Tambahkan tag option ke variabel $lists
				}else{
					$lists .= "<option value='".$data->id_kota."'>".$data->nama_kota."</option>"; // Tambahkan tag option ke variabel $lists
				}
			}
		}
		
		$callback = array('list_kota'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}


	public function listKabupaten(){
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_provinsi = $this->input->post('id_provinsi');
		
		$kabupaten = $this->Home_model->viewByKabuProvinsi($id_provinsi);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$lists = "<option value=''>--Pilih--</option>";
		
		foreach($kabupaten as $data){
			$lists .= "<option value='".$data->id_kabupaten."'>".$data->nama_kabupaten."</option>"; // Tambahkan tag option ke variabel $lists
		}
		
		$callback = array('list_kabupaten'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	public function listKabupaten_edit(){
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_provinsi = $this->input->post('id_provinsi');
		$n_kabupaten = $this->input->post('n_kabupaten');
		
		$kabupaten = $this->Home_model->viewByKabuProvinsi($id_provinsi);
		$kabupaten_edit = $this->Home_model->viewByKabuProvinsi_edit($id_provinsi, $n_kabupaten);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$lists = "<option value=''>--Pilih--</option>";
		
		foreach ($kabupaten_edit as $rowp) {
		
			foreach($kabupaten as $data){
				if($data->id_kabupaten == $rowp->id_kabupaten){
					$lists .= "<option value='".$data->id_kabupaten."' selected>".$data->nama_kabupaten."</option>"; // Tambahkan tag option ke variabel $lists
				}else{
					$lists .= "<option value='".$data->id_kabupaten."'>".$data->nama_kabupaten."</option>"; // Tambahkan tag option ke variabel $lists
				}
			}
		}
		
		$callback = array('list_kabupaten'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

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

	public function myprofile()
	{
		$data['active1'] = '';
		$data['active2'] = 'active';
		//$data['daily'] = $this->Dashboard_model->getAll_DailyFlight();

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['profil'] = $this->Home_model->getProfilId();

		$this->load->view('akses/user/header_user', $data);		
        $this->load->view('akses/user/profil', $data);
	} 


	public function updatemyprofil(){

		$cek_pass = $this->Home_model->getProfilId();

		foreach ($cek_pass as $key) {
			$pass = $key->password;
		}

			$myprofil = array(
				'id_user' => $_POST['id_user'],
				'nomor_user' => $_POST['nomor_user'],
				'nama_user' => $_POST['nama_user'],
				'instansi' => $_POST['instansi'],
				'jabatan' => $_POST['jabatan'],
				'telepon' => $_POST['telepon'],
				'email' => $_POST['email'],
				'username' => $_POST['username'],
				'password' => $_POST['password'],
				'password_baru' => $_POST['password_baru']
			);


			if(!empty($_POST['password'])){
				if($pass != md5($_POST['password'])){
					$this->session->set_flashdata('msg','gagal_password');
				}else if(strlen($_POST['password_baru']) < 6){
					$this->session->set_flashdata('msg','newpassword');
				}else{
					$this->Home_model->update_myprofilpass($myprofil);
					$this->session->set_flashdata('msg','sukses');
				}
			}else{
				$this->Home_model->update_myprofil($myprofil);
				$this->session->set_flashdata('msg','sukses');
			}	

		redirect('Home/myprofile');

	}


	public function forminssert_file($idp){
		$i = -1;
		foreach ($_POST['box1'] as $key => $value) {
			$i++;

			// echo $i."_up".$key."<br>";

			if(!empty($_FILES['up'.$key]['name'])){

			    // echo $idp.'&nbsp;|&nbsp;'.$_POST['nmr'][$key].'&nbsp;|&nbsp;'.$_POST['nom'][$key].'&nbsp;|&nbsp;'.$idp.'_'.$_POST['nmr'][$key].$_POST['kup'][$key].'_'.$_POST['nom'][$key].'&nbsp;|&nbsp;'.$value.'&nbsp;|&nbsp;'.$_FILES['up']['name'][$key]."<br />";
			   unlink('upload/'.$_POST['gup'][$key]);

        	   $config['upload_path'] = 'upload/';
               //restrict uploads to this mime types
        	   $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        	   $config['file_name'] = $idp.'_'.$_POST['nmr'][$key].$_POST['kup'][$key].'_'.$_POST['nom'][$key];
        	   $config['max_size'] = 1024;
        
               //Load upload library and initialize configuration
        	   $this->load->library('upload', $config);
        	   $this->upload->initialize($config);

        	   if($this->upload->do_upload('up'.$key)){
            		$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];

        			//set file data to insert to database
            		$file1['upload'] = $filename;

            		$sql = "UPDATE `t_m1profil` SET `upload`='".$file1['upload']."' WHERE id = '".$value."' AND id_projek = '".$idp."';";

					$query=$this->db->query($sql);       

       			}else{
       				 unlink('upload/'.$_POST['gup'][$key]);

       				 $sql = "UPDATE `t_m1profil` SET `upload`='' WHERE id = '".$value."' AND id_projek = '".$idp."';";

					 $query=$this->db->query($sql); 

       				 $sql = "UPDATE `t_projekprofil` SET `status`= '2' WHERE id_projek = '".$idp."';";

					 $query=$this->db->query($sql);
       				// $this->session->set_flashdata('msg23','inv');
       				}
 			}
		}
		if($_POST['next'] == 'submit'){
 			
 			$query = $this->Home_model->updatefileprofil($idp);

 			redirect('Home/nextinclomplete2/'.$idp);
 		}else{
 			redirect('Home/nextinclomplete2/'.$idp);
 		}
	}


	public function formfinal($idp)
	{
		$data['active1'] = 'active';
		$data['active2'] = '';
		
		$sid = $this->session->userdata("id_user");

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();	
		$data['kotakabu'] = $this->Home_model->getKotaKabu();
		$data['assesment'] = $this->Home_model->assesment();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
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

		$data['getrespon'] = $this->Home_model->getrespon($idp);

		if($this->Home_model->getIdProfilProjekUser($idp, $sid) == TRUE){
			
			$this->load->view('akses/user/header_user', $data);	
       		$this->load->view('akses/user/formfinal', $data);

		}else{
			redirect('Home');
		}
	}

	public function formview($idp)
	{
		$data['active1'] = 'active';
		$data['active2'] = '';
		
		$sid = $this->session->userdata("id_user");

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
	
			
			$this->load->view('akses/user/header_user', $data);	
        	$this->load->view('akses/user/form_view', $data);	
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


	public function tes_check(){
		$this->load->view('tes_cek');
	}

	public function action_cek(){
		foreach ($_POST['t3_check'] as $value) {
			echo $value;
		}
	}

	public function cekarray(){

		$i = -1;
		foreach ($_POST['id_ass'] as $key => $value) {
			$i++;

			if($_POST['p'.$i]=='Y'){
				$_POST['Y'][$key] = "checked";
				$_POST['N'][$key] = "nonchecked";
				$_POST['bobot'][$key];
				$_POST['respon'][$key] = '';
			}else if($_POST['p'.$i]=='N'){
				$_POST['Y'][$key] = "nonchecked";
				$_POST['N'][$key] = "checked";
				$_POST['bobot'][$key] = 0;
				$_POST['respon'][$key];
			}else{
				$_POST['Y'][$key] = "nonchecked";
				$_POST['N'][$key] = "nonchecked";
				$_POST['bobot'][$key] = 0;
				$_POST['respon'][$key];
			}

			echo $value.'&nbsp;|&nbsp;'.$_POST['section'][$key].'&nbsp;|&nbsp;'.$_POST['nomor'][$key].'&nbsp;|&nbsp;'.$_POST['pertanyaan'][$key].'&nbsp;|&nbsp;'.$_POST['intruksi_upload'][$key].'&nbsp;|&nbsp;'.$_POST['penjelasan'][$key].'&nbsp;|&nbsp;'.$_POST['informasi_upload'][$key].'&nbsp;|&nbsp;'.$_POST['p'.$i].'&nbsp;|&nbsp;'.$_POST['Y'][$key].'&nbsp;|&nbsp;'.$_POST['N'][$key].'&nbsp;|&nbsp;'.$_POST['bobot'][$key].'&nbsp;|&nbsp;'.$_POST['respon'][$key].'&nbsp;|&nbsp;'.$_POST['s_upload'][$key].'<br>';

		}

		echo "<br/><br/><br/>";
		
		foreach ($_POST['box1'] as $key => $value) {
			echo '1'.'&nbsp;|&nbsp;'.$_POST['box2'][$key].'&nbsp;|&nbsp;'.$_POST['box3'][$key].'&nbsp;|&nbsp;'.$_POST['box7'][$key].'&nbsp;|&nbsp;'.$_POST['box4'][$key].'&nbsp;|&nbsp;'.$_POST['box5'][$key].'&nbsp;|&nbsp;'.$_POST['box6'][$key].'<br>';
		}

	}
	
	public function cekarrayupload($idp){
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES['up']['name'][6]);
// exit;

		
		foreach ($_POST['box1'] as $key => $value) {

 		  if(!empty($_FILES['up'.$key]['name'])){

			echo $idp.'&nbsp;|&nbsp;'.$_POST['nmr'][$key].'&nbsp;|&nbsp;'.$_POST['nom'][$key].'&nbsp;|&nbsp;'.$idp.'_'.$_POST['nmr'][$key].$_POST['kup'][$key].'_'.$_POST['nom'][$key].'&nbsp;|&nbsp;'.$value.'&nbsp;|&nbsp;'.$_FILES['up'.$key]['name'][$key]."<br />";

		  }
		}

	}


	public function testupload(){
			if(!empty($_FILES['up1']['name'])){

			    // echo $idp.'&nbsp;|&nbsp;'.$_POST['nmr'][$key].'&nbsp;|&nbsp;'.$_POST['nom'][$key].'&nbsp;|&nbsp;'.$idp.'_'.$_POST['nmr'][$key].$_POST['kup'][$key].'_'.$_POST['nom'][$key].'&nbsp;|&nbsp;'.$value.'&nbsp;|&nbsp;'.$_FILES['up']['name'][$key]."<br />";

        	   $config['upload_path'] = 'upload/';
               //restrict uploads to this mime types
        	   $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        	   $config['file_name'] = 'testupload';
        	   $config['max_size'] = 1024;
        
               //Load upload library and initialize configuration
        	   $this->load->library('upload', $config);
        	   $this->upload->initialize($config);

        	   if($this->upload->do_upload('up1')){
            		$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];

        			//set file data to insert to database
            		$file1['upload'] = $filename;

					echo $filename; 

       			}else{

       					echo "gagal";
       				}
			}
	}

}
