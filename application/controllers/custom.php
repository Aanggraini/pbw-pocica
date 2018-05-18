<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom extends CI_Controller {
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

	public function kirim() {
            $this->form_validation->set_rules('design', 'Design', 'required');
            $this->form_validation->set_rules('qty', 'Quantity', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');


		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_pesan');
		} else {
			if(! $this->session->userdata('username')){
				$this->session->set_flashdata('error','Sorry, you are not logged in!');
				redirect('login');
			} else {
				//kalau upload foto
				if ($_FILES['photo']['name'] != '') {
					$config['upload_path'] = './images/custom/';
					$config['allowed_types'] = 'jpg|png';
					$config['max_size']	= '3000'; //KB
					$config['max_width']  = '2000'; //pixels
					$config['max_height']  = '2000'; //pixels
		 
					$this->upload->initialize($config);
					
					if ( ! $this->upload->do_upload('photo'))	{
						$this->load->view('form_pesan');
					} else {
						$this->send_email();
					}
				} 
				else {
					$this->send_email();
				}
			}	
		}
	}

	public function send_email() {

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
			    $this->email->to($this->session->userdata('email'));   
			    $this->email->subject('Custom order');   
			    $this->email->message('Anda memiliki pesanan kustom baru, yakni <br><br>
			   		Design: '.$this->input->post('design').'<br>
			   		Jumlah: '.$this->input->post('qty').'<br>
			   		Nama: '.$this->input->post('name').'<br>
			   		E-mail: '.$this->session->userdata('email').'<br>
			   		Address: '.$this->input->post('address').'<br>
			   		Phone: '.$this->input->post('phone').'<br>
			   		Description: '.$this->input->post('description').'<br>
			   	');  
			   	$this->email->attach('./images/custom/'.$this->upload->data()['file_name']);

               if ($this->email->send())
               {
			   		$this->session->set_flashdata("error","Email berhasil dikirim. Silakan menunggu respon selambatnya 2 x 24 jam.");  
					redirect('custom');
               } else {
				    show_error($this->email->print_debugger());  }
		}

}
