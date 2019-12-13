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
		$data['noass0'] = $this->Home_model->getno1();
		$data['noass1'] = $this->Home_model->getno2();
		$data['noass2'] = $this->Home_model->getno3();
		$data['noass3'] = $this->Home_model->getno4();
		$data['noass4'] = $this->Home_model->getno5();
		$data['noass5'] = $this->Home_model->getno6();
		$data['noass6'] = $this->Home_model->getno7();
		$data['noass7'] = $this->Home_model->getno8();
		$data['noass8'] = $this->Home_model->getno9();
		$data['noass9'] = $this->Home_model->getno10();
		$data['noass10'] = $this->Home_model->getno11();
		$data['noass11'] = $this->Home_model->getno12();
		$data['noass12'] = $this->Home_model->getno13();
		$data['noass13'] = $this->Home_model->getno14();
		$data['noass14'] = $this->Home_model->getno15();

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
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
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
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
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

			// echo $value.'&nbsp;|&nbsp;'.$_POST['nomor'][$key].'&nbsp;|&nbsp;'.$_POST['p'.$i].'&nbsp;|&nbsp;'.$_POST['Y'][$key].'&nbsp;|&nbsp;'.$_POST['N'][$key].'&nbsp;|&nbsp;'.$_POST['bobot'][$key].'&nbsp;|&nbsp;'.$_POST['respon'][$key].'<br>';

			$sql = "INSERT INTO `t_skor`(`id_projek`, `idass`, `nomor_urut`, `pilihan`, `Y`, `N`, `skor`, `respon`) VALUES 
			('".$id."','".$value."','".$_POST['nomor'][$key]."','".$_POST['p'.$i]."','".$_POST['Y'][$key]."','".$_POST['N'][$key]."','".$_POST['bobot'][$key]."','".$_POST['respon'][$key]."');";

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

			$sql = "INSERT INTO `t_skor`(`id_projek`, `idass`, `nomor_urut`, `pilihan`, `Y`, `N`, `skor`, `respon`) VALUES 
			('".$rid."','".$value."','".$_POST['nomor'][$key]."','".$_POST['p'.$i]."','".$_POST['Y'][$key]."','".$_POST['N'][$key]."','".$_POST['bobot'][$key]."','".$_POST['respon'][$key]."');";

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
		$data['assesment'] = $this->Home_model->assesment_u();	
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
		$data['skor'] = $this->Home_model->getskor($idp);
		$data['noassu0'] = $this->Home_model->gettu3($idp);
		$data['noassu1'] = $this->Home_model->gettu5($idp);
		$data['noassu2'] = $this->Home_model->gettu6($idp);
		$data['noassu3'] = $this->Home_model->gettu7($idp);
		$data['noassu4'] = $this->Home_model->gettu8($idp);
		$data['noassu5'] = $this->Home_model->gettu9($idp);
		$data['noassu6'] = $this->Home_model->gettu13($idp);
		$data['noassu7'] = $this->Home_model->gettu14($idp);
		$data['noassu8'] = $this->Home_model->gettu15($idp);
		
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
	
	public function Insertfile($idp){
		
      //Check if file is not empty
      if(!empty($_FILES['up1']['name'])){

      	unlink('upload/'.$_POST['g1']);

        $config['upload_path'] = 'upload/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k1'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up1')){

            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            	$query = $this->Home_model->updatefile1($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g1']);
       			$query = $this->Home_model->updatefile1_error1($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);

       			$this->session->set_flashdata('msg','inv');
       		}
 		}

 		if(!empty($_FILES['up2']['name'])){

      	unlink('upload/'.$_POST['g2']);

        $config['upload_path'] = 'upload/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k2'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up2')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile2($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g2']);
       			$query = $this->Home_model->updatefile1_error2($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg1','inv');
       		}
 		}

 		if(!empty($_FILES['up3']['name'])){

      	unlink('upload/'.$_POST['g3']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k3'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up3')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile3($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g3']);
       			$query = $this->Home_model->updatefile1_error3($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg2','inv');
       		}
 		}

 		if(!empty($_FILES['up4']['name'])){

      	unlink('upload/'.$_POST['g4']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k4'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up4')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile4($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g4']);
       			$query = $this->Home_model->updatefile1_error4($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg3','inv');
       		}
 		}

 		
 		if(!empty($_FILES['up5']['name'])){

      	unlink('upload/'.$_POST['g5']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k5'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up5')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile5($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g5']);
       			$query = $this->Home_model->updatefile1_error5($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg4','inv');
       		}
 		}

 		if(!empty($_FILES['up6']['name'])){

      	unlink('upload/'.$_POST['g6']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k6'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up6')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile6($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g6']);
       			$query = $this->Home_model->updatefile1_error6($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg5','inv');
       		}
 		}


 		if(!empty($_FILES['up7']['name'])){

      	unlink('upload/'.$_POST['g7']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k7'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up7')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile7($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g7']);
       			$query = $this->Home_model->updatefile1_error7($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg6','inv');
       		}
 		}

 		if(!empty($_FILES['up8']['name'])){

      	unlink('upload/'.$_POST['g8']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k8'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up8')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile8($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g8']);
       			$query = $this->Home_model->updatefile1_error8($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg7','inv');
       		}
 		}

 		if(!empty($_FILES['up9']['name'])){

      	unlink('upload/'.$_POST['g9']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k9'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up9')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile9($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g9']);
       			$query = $this->Home_model->updatefile1_error10($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg8','inv');
       		}
 		}

 		if(!empty($_FILES['up10']['name'])){

      	unlink('upload/'.$_POST['g10']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k10'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up10')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile10($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g10']);
       			$query = $this->Home_model->updatefile1_error10($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg9','inv');
       		}
 		}

 		
 		if(!empty($_FILES['up11']['name'])){

      	unlink('upload/'.$_POST['g11']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k11'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up11')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile11($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g11']);
       			$query = $this->Home_model->updatefile1_error11($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg10','inv');
       		}
 		} 		

 		if(!empty($_FILES['up12']['name'])){

      	unlink('upload/'.$_POST['g12']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k12'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up12')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile12($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g12']);
       			$query = $this->Home_model->updatefile1_error12($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg11','inv');
       		}
 		}

 		if(!empty($_FILES['up13']['name'])){

      	unlink('upload/'.$_POST['g13']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k13'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up13')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile13($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g13']);
       			$query = $this->Home_model->updatefile1_error13($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg12','inv');
       		}
 		}

 		if(!empty($_FILES['up14']['name'])){

      	unlink('upload/'.$_POST['g14']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k14'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up14')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile14($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g14']);
       			$query = $this->Home_model->updatefile1_error14($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg13','inv');
       		}
 		}

 		if(!empty($_FILES['up15']['name'])){

      	unlink('upload/'.$_POST['g15']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k15'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up15')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile15($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g15']);
       			$query = $this->Home_model->updatefile1_error15($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg14','inv');
       		}
 		}

 		if(!empty($_FILES['up16']['name'])){

      	unlink('upload/'.$_POST['g16']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k16'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up16')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile16($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g16']);
       			$query = $this->Home_model->updatefile1_error16($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg15','inv');
       		}
 		}

 		if(!empty($_FILES['up17']['name'])){

      	unlink('upload/'.$_POST['g17']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k17'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up17')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile17($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g17']);
       			$query = $this->Home_model->updatefile1_error17($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg16','inv');
       		}
 		}


 		if(!empty($_FILES['up18']['name'])){

      	unlink('upload/'.$_POST['g18']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k18'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up18')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile18($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g18']);
       			$query = $this->Home_model->updatefile1_error18($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg17','inv');
       		}
 		}

 		if(!empty($_FILES['up19']['name'])){

      	unlink('upload/'.$_POST['g19']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k19'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up19')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile19($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g19']);
       			$query = $this->Home_model->updatefile1_error19($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg18','inv');
       		}
 		}


 		if(!empty($_FILES['up20']['name'])){

      	unlink('upload/'.$_POST['g20']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k20'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up20')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile20($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g20']);
       			$query = $this->Home_model->updatefile1_error20($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg19','inv');
       		}
 		}

 		if(!empty($_FILES['up21']['name'])){

      	unlink('upload/'.$_POST['g21']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k21'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up21')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile21($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g21']);
       			$query = $this->Home_model->updatefile1_error21($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg20','inv');
       		}
 		}

 		if(!empty($_FILES['up22']['name'])){

      	unlink('upload/'.$_POST['g22']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k22'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up22')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile22($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g22']);
       			$query = $this->Home_model->updatefile1_error22($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg21','inv');
       		}
 		}

 		if(!empty($_FILES['up23']['name'])){

      	unlink('upload/'.$_POST['g23']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k23'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up23')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile23($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g23']);
       			$query = $this->Home_model->updatefile1_error23($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg22','inv');
       		}
 		}

 		if(!empty($_FILES['up24']['name'])){

      	unlink('upload/'.$_POST['g24']);

        $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
        $config['allowed_types'] = 'jpg|jpeg|png|gif|rar|zip|doc|docx|xls|xlsx|pdf|ppt|pptx';
        $config['file_name'] = $_POST['k24'];
        $config['max_size'] = 1024;
        
            //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('up24')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

        //set file data to insert to database
            $file1['upload'] = $filename;

            $query = $this->Home_model->updatefile24($file1, $idp);         

       		}else{
       			unlink('upload/'.$_POST['g24']);
       			$query = $this->Home_model->updatefile1_error24($idp);
       			$query = $this->Home_model->updatefileprofil_error($idp);
       			$this->session->set_flashdata('msg23','inv');
       		}
 		}

 		if($_POST['next'] == 'submit'){
 			 if(($_POST['f1'] != '' || $_POST['f1'] != NULL) && ($_POST['f2'] != '' || $_POST['f2'] != NULL) && ($_POST['f3'] != '' || $_POST['f3'] != NULL)  && ($_POST['f4'] != '' || $_POST['f4'] != NULL) && ($_POST['f5'] != '' || $_POST['f5'] != NULL) && ($_POST['f6'] != '' || $_POST['f6'] != NULL) && ($_POST['f7'] != '' || $_POST['f7'] != NULL) && ($_POST['f8'] != '' || $_POST['f8'] != NULL) && ($_POST['f9'] != '' || $_POST['f9'] != NULL) && ($_POST['f10'] != '' || $_POST['f110'] != NULL) && ($_POST['f11'] != '' || $_POST['f11'] != NULL) && ($_POST['f12'] != '' || $_POST['f12'] != NULL)  && ($_POST['f13'] != '' || $_POST['f13'] != NULL) && ($_POST['f14'] != '' || $_POST['f14'] != NULL) && ($_POST['f15'] != '' || $_POST['f15'] != NULL) && ($_POST['f16'] != '' || $_POST['f16'] != NULL) && ($_POST['f17'] != '' || $_POST['f17'] != NULL) && ($_POST['f18'] != '' || $_POST['f18'] != NULL) && ($_POST['f19'] != '' || $_POST['f19'] != NULL) && ($_POST['f20'] != '' || $_POST['f20'] != NULL) && ($_POST['f21'] != '' || $_POST['f21'] != NULL) && ($_POST['f22'] != '' || $_POST['f22'] != NULL) && ($_POST['f23'] != '' || $_POST['f23'] != NULL) && ($_POST['f24'] != '' || $_POST['f24'] != NULL)){

 					$query = $this->Home_model->updatefileprofil($idp);
 			}else{
 				$query = $this->Home_model->updatefileprofil_error($idp);
 			}

 			redirect('Home/nextinclomplete2/'.$idp);
 		}else{
 			redirect('Home');
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
		$data['profil'] = $this->Home_model->getIdProfilProjek($idp);
		$data['profilus'] = $this->Home_model->getIdProfilProjekUser($idp, $sid);
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

			echo $value.'&nbsp;|&nbsp;'.$_POST['nomor'][$key].'&nbsp;|&nbsp;'.$_POST['p'.$i].'&nbsp;|&nbsp;'.$_POST['Y'][$key].'&nbsp;|&nbsp;'.$_POST['N'][$key].'&nbsp;|&nbsp;'.$_POST['bobot'][$key].'&nbsp;|&nbsp;'.$_POST['respon'][$key].'<br>';

		}

		echo "<br/><br/><br/>";
		
		foreach ($_POST['box1'] as $key => $value) {
			echo '1'.'&nbsp;|&nbsp;'.$_POST['box2'][$key].'&nbsp;|&nbsp;'.$_POST['box3'][$key].'&nbsp;|&nbsp;'.$_POST['box7'][$key].'&nbsp;|&nbsp;'.$_POST['box4'][$key].'&nbsp;|&nbsp;'.$_POST['box5'][$key].'&nbsp;|&nbsp;'.$_POST['box6'][$key].'<br>';
		}

	}		

}
