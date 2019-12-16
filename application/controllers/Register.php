<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Register extends CI_Controller{
	

	function __construct(){
		parent::__construct();		
		$this->load->model('Login_model');
		$this->load->model('Home_model');
 
	}

	public function create_captcha()
	{
        $options = array(
            'word_length' => 6,  // To set length of captcha word.
            'img_path' => './assets/captcha/',   // Create  folder "images" in root directory, and give path.
            'img_url' => base_url() .'assets/captcha/',  // To store captcha images in "images" folder.
            'img_width' => '250',   //Set image width.
            'font_path' => '.assets/dashboard/bootstrap/fonts/glyphicons-halflings-regular.ttf',
            'img_height' => 50,   // Set image height.

            'font_size' => 50,
            'show_grid' => FALSE,
            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 150, 150)
            )
        );

        $cap = create_captcha($options);

        $this->session->set_userdata('captchaword', $cap['word']);

        return $cap;
	}

    function check_captcha()
    {
        if ( $this->input->post('captcha') == $this->session->userdata('captchaword') )
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('check_captcha', 'Captcha is Wrong');

            return false;
        }
    }

	public function index(){

		$data['sektor'] = $this->Home_model->getSektor();
		$data['kementerian'] = $this->Home_model->getKementerian();
		$data['lpnk'] = $this->Home_model->getNonKementrian();
		$data['provinsi'] = $this->Home_model->getProvinsi();
		$data['kota'] = $this->Home_model->getKota();	
		$data['kabupaten'] = $this->Home_model->getKabupaten();
		$image = $this->create_captcha();
		$data['img'] = $image['image'];
		$data['img_name'] = $image['filename'];

		$this->load->view('login/register', $data);
	}

    public function _upload($regist)
  {
    $upload_path = './upload';
    $config['upload_path']          = $upload_path;
    $config['allowed_types']        = 'jpg|png|jpeg|pdf';
    $config['file_name']            = 'User' . '-' . date('YmdHis');
    $config['overwrite']            = true;
    $config['max_size']             = 2048;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('img')) {
      $error = array('error' => $this->upload->display_errors());
      return 'default.png';
    } else {
      $datafile = $this->upload->data();
      return $datafile['file_name'];
    }
  }
  public function _deleteimg($id)
  {
    $customer = $this->Login_model->get($id);
    if ($customer->img != 'default.png') {
      $filename = explode(".", $customer->img)[0];
      return array_map('unlink', glob(FCPATH . "/upload/product/$filename.*"));
    }
  }

	public function newmember(){
        $this->form_validation->set_rules('nik', 'NIK', 'required|max_length[17]');
        $this->form_validation->set_rules('foto', 'Upload NIK', 'required');
		$this->form_validation->set_rules('nama_user', 'Nama', 'required');
		$this->form_validation->set_rules('instansi', 'Instansi', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('telepon', 'No HP', 'required|max_length[13]|min_length[8]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[t_user.email]');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]|is_unique[t_user.username]');
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|callback_check_captcha|required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[password]');

        if ( $this->form_validation->run() == false )
        {
            $this->session->set_flashdata('nik',$_POST['nik']);
            $this->session->set_flashdata('foto',$_POST['foto']);
          	$this->session->set_flashdata('nama_user',$_POST['nama_user']);
          	$this->session->set_flashdata('instansi',$_POST['instansi']);
          	$this->session->set_flashdata('jabatan',$_POST['jabatan']);
        	$this->session->set_flashdata('telepon',$_POST['telepon']);
        	$this->session->set_flashdata('email',$_POST['email']);
          	$this->session->set_flashdata('username',$_POST['username']);
        	$this->index();
        }
        else
        {
			$regist = array(
                 'nik' => $_POST['nik'], 
                 'foto' => $_POST['foto'], 
				 'nama_user' => $_POST['nama_user'], 
				 'instansi' => $_POST['instansi'], 
				 'jabatan' => $_POST['jabatan'], 
				 'telepon' => $_POST['telepon'], 
				 'email' => $_POST['email'],
				 'username' => $_POST['username'],
				 'password' => $_POST['password']
			);


		 // Load PHPMailer library
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
        $mail->Subject = 'SIP Application';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        //$mailContent = "<p>Login Konfirmasi : <a href='http://localhost:7777/pii_sip3/login/loginconfirm'>Konfirmasi Login</a></p>";
        $mailContent = "<p>Login Konfirmasi : <a href='http://application.iigf.co.id/pii_sip/login/loginconfirm'>Konfirmasi Login</a></p>";
        $mail->Body = $mailContent;
        
        

        // Send email
        if(!$mail->send()){
           // echo 'Message could not be sent.';
           // echo 'Mailer Error: ' . $mail->ErrorInfo;
        	echo $this->session->set_flashdata('msg','gagal_kirim');
        	$this->index();
        }else{
			$this->Login_model->insert_regist($regist);
			redirect('register/success');
        }

			
        }
	}

	public function success(){

		$this->load->view('login/sukses_daftar');
	}

	public function deleteCaptcha()
	{
        unlink("assets/captcha/".$this->input->post('img_name'));

		return trus;
	}
}