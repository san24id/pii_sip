<?php 

class email extends CI_Controller{
	
	public function index(){	
	
		$this->load->view('tes_mail');
	}


    public function TesMail(){

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
       // $mail->addReplyTo('');
        
        // Add a recipient
        $mail->addAddress($_POST['tomail']);
        
        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = $_POST['subjek'];
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = "<p>".$_POST['box']."</p>";
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }

}