<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function check_credential()
	{
		$this->load->library('encrypt');
		$username = set_value('username');
		$password = set_value('password');
		
		$hasil = $this->db->where('username', $username)
						  ->limit(1)
						  ->get('users');
		
		if($hasil->num_rows() > 0){
			$x = $hasil->row();
			if (password_verify($password, $x->password)) {
				return $x;
			}
			else { 
				return array();
			}
		} else {
			return array();
		}
	}

	public function check_available()
	{
		$username = set_value('username');
		$email = set_value('email');
		
		$hasil = $this->db->where('username', $username)
						  ->limit(1)
						  ->get('users');
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			$hasil2 = $this->db->where('email', $email)
							   ->limit(1)
							   ->get('users');
			
			if($hasil2->num_rows() > 0){
				return $hasil2->row();
			} else {
				return array();
			}
		}
	}

}