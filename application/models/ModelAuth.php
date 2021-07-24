<?php
/**
 * 
 */
class ModelAuth extends CI_Model
{
	public function Mlogin($username,$password){
			$query = $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
			return $query;
		}

}