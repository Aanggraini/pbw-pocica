<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
		$this->load->model('products_model');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['products'] = $this->products_model->all();
		$this->load->view('product', $data);
		$this->load->view('footer');
	}
}
