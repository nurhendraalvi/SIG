<?php 
/**
 * 
 */
class Auth extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('ModelAuth');
	}
	public function index(){
		$this->load->view('Auth/Login');
	}
	public function login(){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$cek = $this->ModelAuth->Mlogin($username,$password);
			if ($cek->num_rows() > 0) { 
				$data = $cek->row_array();
				$this->session->set_userdata('masuk', TRUE);
				$this->session->set_userdata('akses','1');
				$this->session->set_userdata('ses_id', $data['username']);
				$this->session->set_userdata('ses_name', $data['Nama']);
				$this->session->set_userdata('ses_akses', $data['Akses']);
				redirect('Auth/home');
			}else{
			echo "Username dan password salah !";
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Auth/index');
	}
	public function home(){

		redirect('Admin/ReadDataIndex');
	}
}