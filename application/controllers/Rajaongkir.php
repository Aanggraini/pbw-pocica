<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rajaongkir extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
		$this->load->model('Products_model');
		$this->load->library('cart');

	}

	public function index()
	{
		$this->load->view('show_cart');
	}

	public function getCity($prov) {		

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=$prov",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: dd48b67801bec607fe0413b6a9445505"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  //echo $response;
			$data = json_decode($response, true);
		  //echo json_encode($k['rajaongkir']['results']);

		  
		  for ($j=0; $j < count($data['rajaongkir']['results']); $j++){
		    echo "<option value='".$data['rajaongkir']['results'][$j]['city_id']."'>".$data['rajaongkir']['results'][$j]['city_name']."</option>";
		  
		  }
		}
	}

	public function getCost($des = NULL)
	{
		$origin = 79;
		$destination = $des;
		$berat = 10;
		$courier = "jne";

		foreach ($this->cart->contents() as $key) {
			$berat += ($key['weight'] * $key['qty']);
		}

		$data = array('origin' => $origin,
						'destination' => $destination, 
						'berat' => $berat, 
						'courier' => $courier 

		);
$curl = curl_init();


curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$berat&courier=$courier",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: dd48b67801bec607fe0413b6a9445505"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
  $data = json_decode($response, true);
 echo $response;

		  for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {

				for ($l=0; $l < count($data['rajaongkir']['results'][$i]['costs']); $l++) {

					echo '<option value="'.$data['rajaongkir']['results'][$i]['costs'][$l]['cost'][0]['value'].','.$data['rajaongkir']['results'][$i]['costs'][$l]['service'].'('.$data['rajaongkir']['results'][$i]['costs'][$l]['description'].')">';
					echo $data['rajaongkir']['results'][$i]['costs'][$l]['cost'][0]['value'].', '.$data['rajaongkir']['results'][$i]['costs'][$l]['service'].' ('.$data['rajaongkir']['results'][$i]['costs'][$l]['description'].')</option>';

				}

		  }
}
			 
	}

}