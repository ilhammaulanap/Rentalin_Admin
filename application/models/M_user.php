<?php  

/**
* 
*/
class M_user extends CI_Model
{
	function login($username,$password){
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		return $this->db->get("admin")->row();
	}

}


?>