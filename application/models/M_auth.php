<?php  

/**
* 
*/
class M_auth extends CI_Model
{
	
	private $table_name = "admin";

	function get_user_by_emai($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		return $this->db->get($this->table_name)->row();
	}
}

?>