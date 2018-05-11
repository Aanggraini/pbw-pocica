<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class signup extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('signup_model');
			$this->load->database(); 
			$this->load->library('cart');
			$this->load->library('form_validation');
		}
		public function index(){
			$username=$this->input->post('username');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->signup_model->tambah($username,$email,$password);
			redirect('signup/member');
		}
		public function member(){
			$this->load->view('signin');
		}
		public function tambah(){
			$this->load->view('signup');
		}
	}
?>