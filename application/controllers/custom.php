<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class custom extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
		$this->load->model('products_model');
		$this->load->library('cart');

	}
	public function index()
	{ 
		$config = Array(
			'protocol' => 'smtp';
			'smtp_host' => 'ssl://smtp.googlemail.com';
			'smtp_port' => '465';
			'smtp_user'	=> 'ntsari17@gmail.com';
			'smtp_pass' => 'nita1234'

		);

		$this->load->library('form_pesan', $config);
		$this->email->set_newline("\r\n");
	{
		$this->load->view('form_pesan');
	}
		
	}
}
