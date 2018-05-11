<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
		$this->load->model('products_model');
		$this->load->library('cart');
	}

	public function index()
	{
		$this->load->view('blog');
	}
}
