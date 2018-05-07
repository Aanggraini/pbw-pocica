<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
		$this->footer();
	}

	public function footer()
	{
		$this->load->view('footer');
	}
}
