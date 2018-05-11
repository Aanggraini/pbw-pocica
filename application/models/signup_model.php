<?php
	class signup_model extends CI_Model{
		public function tambah($username, $email, $password){
			$data = array(
				'username' => $username,
				'email' => $email,
				'password' => $password,
				);
			$this->db->insert('users',$data);
		}
	} 
?>