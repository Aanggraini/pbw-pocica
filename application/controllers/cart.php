<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->database(); 
  $this->load->model('products_model');
  $this->load->library('cart');
  $this->load->library('session');
 }
 public function index()
 {
  if($this->session->userdata('username') == 'admin'){
   redirect(base_url());
  } else {
   $data['products'] = $this->products_model->all();
   $this->load->view('show_cart', $data);
  }
 }
 public function success()
 {
  if(! $this->session->userdata('username')){
   $this->session->set_flashdata('error','Sorry, you are not logged in!');
   redirect('login');
  } else if($this->session->userdata('username') == 'admin'){
   redirect(base_url());
  } else {
   $data['total'] = $this->input->post("total");
   $data['ongkir'] = $this->input->post("ongkir");
   $this->send_email1();
   $this->send_email2();
   $this->cart->destroy();
   if (! $data['total'] || $data['total'] == null || $data['total']) {
    $this->load->view('order_success', $data);
   } else {
    redirect(base_url());
   }
  } 
 }


 public function send_email1() {

  $this->load->library('email');

   $total = $this->input->post("total");
   $ongkir = $this->input->post("ongkir");

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

     $table = '';
     $no = 1;
     foreach ($this->cart->contents() as $carts) {
      $table .= '<tr><td>'.$no++.'</td><td>'.$carts['name'].'</td><td>'.$carts['qty'].'</td><td style="text-align:right">'.number_format($carts['subtotal'], 0, ',', '.').'</td></tr>';
     }

       $this->email->from('amirfak922@gmail.com', 'Email Pocica');   
       $this->email->to('ami99b@gmail.com');   
       $this->email->subject('Order');   
       $this->email->message('Anda memiliki pesanan baru, yakni <br><br>
        Nama: '.$this->input->post('name').'<br>
        No. Telpon: '.$this->input->post('phone').'<br>
        E-mail: '.$this->session->userdata('email').'<br>
        Alamat: '.$this->input->post('address').'<br>
        Provinsi: '.$this->input->post('propinsi_tujuan').'<br>
        Kota: '.$this->input->post('destination').'<br>
        Kode Pos: '.$this->input->post('postcode').'<br>
        Layanan pengiriman (JNE): '.$this->input->post('jenis').'<br>
        Detil pesanan: <br>
        <table border="1" style="width: 80%">
      <tr><th>#</th><th>Nama Barang</th><th>Jumlah</th><th>Harga</th></tr>
      '.$table.'
      <tr><td colspan="3">Ongkos Kirim</td><td style="text-align:right">'.number_format($ongkir, 0, ',', '.').'</td></tr>
      <tr><td colspan="3">Total</td><td style="text-align:right">'.number_format($total, 0, ',', '.').'</td></tr>
      </table>
       ');  

               if ($this->email->send())
               {
               } else {
        show_error($this->email->print_debugger());  }
  }


 public function send_email2() {

  $this->load->library('email');
  
   $total = $this->input->post("total");
   $ongkir = $this->input->post("ongkir");

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
       $this->email->subject('Detail Pembayaran');   
       $this->email->message('Total yang harus anda bayar adalah sebesar:
        RP '. number_format($data['total'],0,',','.') .'<br>
        Ke Rekening BCA 098765456 a.n. XXX selambat-lambatnya 2 x 24 jam agar dapat kami proses.<br>
        Detil pesanan: <br>
        <table border="1" style="width: 80%">
      <tr><th>#</th><th>Nama Barang</th><th>Jumlah</th><th>Harga</th></tr>
      '.$table.'
      <tr><td colspan="3">Ongkos Kirim</td><td style="text-align:right">'.number_format($ongkir, 0, ',', '.').'</td></tr>
      <tr><td colspan="3">Total</td><td style="text-align:right">'.number_format($total, 0, ',', '.').'</td></tr>
      </table><br>
        Apabila telah transfer dimohon untuk membalas email ini beserta bukti pembayaran. Terima kasih
       ');  

               if ($this->email->send())
               {
               } else {
        show_error($this->email->print_debugger());  
     }
  }
}