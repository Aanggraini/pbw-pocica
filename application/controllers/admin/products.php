<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('products_model');
	}
	
	public function index()
	{
		if(! $this->session->userdata('grup')){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login');
		} else {
			$data['products'] = $this->products_model->all();
			$this->load->view('admin/all_products', $data);
		}
	}

	public function create(){
		//form validation sebelum mengeksekusi QUERY INSERT
		$this->form_validation->set_rules('name', 'Product Name', 'required');
		$this->form_validation->set_rules('description', 'Product Description', 'required');
		$this->form_validation->set_rules('price', 'Product Price', 'required|integer');
		$this->form_validation->set_rules('stock', 'Available Stock', 'required|integer');
		$this->form_validation->set_rules('weight', 'Weight', 'required|integer');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/add_product');
		} else {
			//load uploading file library
			$config['upload_path'] = './images/produk/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '1000'; //KB
			$config['max_width']  = '2000'; //pixels
			$config['max_height']  = '2000'; //pixels

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				//file gagal diupload -> kembali ke form tambah
				$this->load->view('admin/add_product');
			} else {
				//file berhasil diupload -> lanjutkan ke query INSERT
				// eksekusi query INSERT
				$gambar = $this->upload->data();
				$data_product =	array(
					'name'			=> set_value('name'),
					'description'	=> set_value('description'),
					'price'			=> set_value('price'),
					'stock'			=> set_value('stock'),
					'image'			=> $gambar['file_name'],
					'weight'		=> set_value('weight')
				);
				$this->products_model->create($data_product);
				redirect('admin/products');
			}
			
		}
	}

	public function delete($id){
		$this->products_model->delete($id);
		redirect('admin/products');
	}

	public function update($id){
		$this->form_validation->set_rules('name', 'Product Name', 'required');
		$this->form_validation->set_rules('description', 'Product Description', 'required');
		$this->form_validation->set_rules('price', 'Product Price', 'required|integer');
		$this->form_validation->set_rules('stock', 'Available Stock', 'required|integer');
		$this->form_validation->set_rules('weight', 'Weight', 'required|integer');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->products_model->find($id);
			$this->load->view('admin/edit_product', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				//form submit dengan gambar diisi
				//load uploading file library
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '300'; //KB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels

				$this->load->library('upload', $config);
			
			
				if ( ! $this->upload->do_upload())
				{
					$data['product'] = $this->products_model->find($id);
					$this->load->view('admin/edit_product', $data);
				} else {
					$gambar = $this->upload->data();
					$data_product =	array(
						'name'			=> set_value('name'),
						'description'	=> set_value('description'),
						'price'			=> set_value('price'),
						'stock'			=> set_value('stock'),
						'image'			=> $gambar['file_name'],
						'weight'		=> set_value('weight')
					);
					$this->products_model->update($id, $data_product);
					redirect('admin/products');
				}
			} else {
				//form submit dengan gambar dikosongkan
				$data_product =	array(
					'name'			=> set_value('name'),
					'description'	=> set_value('description'),
					'price'			=> set_value('price'),
					'stock'			=> set_value('stock'),
					'weight'		=> set_value('weight')
				);
				$this->products_model->update($id, $data_product);
				redirect('admin/products');
			}
		}
	}
}