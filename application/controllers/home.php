<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
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
		$this->load->view('index', $data);
		$this->footer();
	}

	public function footer()
	{
		$this->load->view('footer');
	}

	public function add_to_cart($product_id)
	{
		$product = $this->products_model->find($product_id);
		$data = array(
					   'id'      => $product->id,
					   'qty'     => 1,
					   'price'   => $product->price,
					   'name'    => $product->name,
					   'image'   => $product->image,
					   'weight'	 => $product->weight
					);

		$this->cart->insert($data);
		redirect(base_url());
	}

	public function remove_item($row_id, $qty)
	{
		$data = array(
					   'rowid'   => $row_id,
					   'qty'     => $qty - 1,
					);

		$this->cart->update($data);
		redirect(base_url());
	}

	public function remove($row_id)
	{
		$this->cart->remove($row_id);
		redirect('cart');
	}
	
	public function cart(){
		$this->load->view('show_cart');
	}
	
	public function clear_cart()
	{
		$this->cart->destroy();
		redirect(base_url());
	}
}
