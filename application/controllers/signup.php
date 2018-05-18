<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Signup extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('signup_model');
			$this->load->database(); 
			$this->load->library('cart');
			$this->load->library('form_validation');
			$this->load->library('encrypt');
		}
		public function index(){
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|regex_match[/^[a-zA-Z0-9]+$/]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('signup');
		}
		else
		{
			$username=$this->input->post('username');
			$email=$this->input->post('email');
			$password=password_hash($this->input->post('password'), PASSWORD_DEFAULT, ['cost' => 12]);
			//$password=$this->input->post('password');

			$this->load->model('users_model');
			$valid_user = $this->users_model->check_available();
			
			if($valid_user == FALSE) {
				$this->signup_model->tambah($username,$email,$password,0);
				redirect('signup/member');
			} else {
				$this->session->set_flashdata('error','Username / Email is not available!');
				redirect('signup/tambah');
			}
		}

		}
		public function member(){
			$this->load->view('signin');
		}
		public function tambah(){
			$this->load->view('signup');
		}
	}
?>