<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class custom extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
		$this->load->model('products_model');
		$this->load->library('cart');
		$this->load->library('form_validation');
		$this->load->library('upload');
        $this->load->helper(array('form', 'url', 'email'));
	}
	public function index()
	{ 
		$this->load->view('form_pesan');
	}

	public function sendd() {

         $from_email = "ami99b@gmail.com"; 
         $to_email = "amirfak922@gmail.com"; 
   
         //Load email library 
         $this->load->library('email'); 
   
			    $this->email->from('amirfak922@gmail.com', 'Email Pocica');   
			    $this->email->to('ami99b@gmail.com');   
			    $this->email->subject('Custom order');   
			    $this->email->message('Anda memiliki pesanan kustom baru, yakni <br><br>
			   		Design: '.$this->input->post('design').'<br>
			   		Jumlah: '.$this->input->post('qty').'<br>
			   		Nama: '.$this->input->post('name').'<br>
			   		E-mail: '.$this->input->post('email').'<br>
			   		Address: '.$this->input->post('address').'<br>
			   		Phone: '.$this->input->post('phone').'<br>
			   		Description: '.$this->input->post('description').'<br>
			   	');  
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("error","Email sent successfully."); 
         else 
         $this->session->set_flashdata("error","Error in sending Email."); 
         $this->load->view('email_form'); 

	}

	public function kirim() {

		$this->load->library('email');

               $config['charset'] = 'utf-8';
               $config['useragent'] = 'Olshopku';
               $config['protocol'] = 'smtp';
               $config['mailtype'] = 'html';
               $config['smtp_host'] = 'ssl://smtp.gmail.com';
               $config['smtp_port'] = '465';
               $config['smtp_timeout'] = '5';
               $config['smtp_user'] = 'amirfak922'; //isi dengan email gmail
               $config['smtp_pass'] = 'Sukses21'; //isi dengan password
               $config['crlf'] = "\r\n";
               $config['newline'] = "\r\n";
               $config['wordwrap'] = TRUE;

               $this->email->initialize($config);


			    $this->email->from('amirfak922@gmail.com', 'Email Pocica');   
			    $this->email->to('ami99b@gmail.com');   
			    $this->email->subject('Custom order');   
			    $this->email->message('Anda memiliki pesanan kustom baru, yakni <br><br>
			   		Design: '.$this->input->post('design').'<br>
			   		Jumlah: '.$this->input->post('qty').'<br>
			   		Nama: '.$this->input->post('name').'<br>
			   		E-mail: '.$this->input->post('email').'<br>
			   		Address: '.$this->input->post('address').'<br>
			   		Phone: '.$this->input->post('phone').'<br>
			   		Description: '.$this->input->post('description').'<br>
			   	');  

               if ($this->email->send())
               {
			   		$this->session->set_flashdata("error","Email berhasil dikirim.");  
					redirect('custom');
               } else {
    show_error($this->email->print_debugger());  }


	}

	public function send() {
			    $config = Array(
               'useragent' => 'CodeIgniter',
               'protocol'  => 'smtp',
               'mailpath'  => '/usr/sbin/sendmail',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'amirfak922',   // Ganti dengan email gmail Anda.
               'smtp_pass' => 'Sukses21',             // Password gmail Anda.
               'smtp_port' => 465,
               'smtp_keepalive' => TRUE,
               'smtp_crypto' => 'SSL',
               'wordwrap'  => TRUE,
               'wrapchars' => 80,
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'validate'  => TRUE,
               'crlf'      => "\r\n",
               'newline'   => "\r\n",
           );

         


$this->load->library('email', $config);
$this->email->set_newline("\r\n");
			    $this->email->from('amirfak922@gmail.com', 'Email Pocica');   
			    $this->email->to('ami99b@gmail.com');   
			    $this->email->subject('Custom order');   
			    $this->email->message('Anda memiliki pesanan kustom baru, yakni <br><br>
			   		Design: '.$this->input->post('design').'<br>
			   		Jumlah: '.$this->input->post('qty').'<br>
			   		Nama: '.$this->input->post('name').'<br>
			   		E-mail: '.$this->input->post('email').'<br>
			   		Address: '.$this->input->post('address').'<br>
			   		Phone: '.$this->input->post('phone').'<br>
			   		Description: '.$this->input->post('description').'<br>
			   	');  

//$result = $this->email->send();
			    if (!$this->email->send()) {
    show_error($this->email->print_debugger());   
			    } else {  
			   		$this->session->set_flashdata("error","Email berhasil dikirim.");  
					redirect('custom');
			    }  
		    }
}
