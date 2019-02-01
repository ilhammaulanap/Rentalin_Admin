<?php  

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("M_user");
	}

	function index(){
		if (!empty($this->session->userdata("username")))
			redirect(base_url("Iklan"));

		$this->load->view("V_login");
	}

	function login_proses(){
		$username=$this->input->post("username");
		$password=$this->input->post("password");
		$user=$this->M_user->login($username,$password);
		
		if ($user) {
			$this->session->set_userdata((array)$user);
			redirect(site_url("Iklan"));
		}else{
			
			echo "<script>alert('username atau password salah!');(location.href='index');</script>";
			
		}
	}

	function logout(){
		$array_items = array('id_admin','username','password','email','nama','jenis_kelamin','alamat','photo');
		$this->session->unset_userdata($array_items);

		redirect($this->index());
	}
}

?>