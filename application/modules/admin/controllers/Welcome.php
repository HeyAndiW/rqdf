<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('home/M_databases');
	}

	// public function index(){
	// 	if ($this->session->userdata('level') == 'user' || empty($this->session->userdata('level'))) {
	// 		redirect('admin/Welcome/logout');
	// 	}
	// 	$data['username'] = $this->session->userdata('username');
	// 	$data['profile'] = $this->session->userdata('profile');
	// 	$data['level'] = $this->session->userdata('level');


	// 	$this->load->view('header',$data);
	// 	$this->load->view('utama',$data);
	// 	$this->load->view('footer');
	// }
/*-------------------Login-------------------*/
	public function login(){
		$data['Logerr'] = $this->session->flashdata('Logerr');

		$this->load->view('login', $data);
		$this->load->view('footer');
	}

	function do_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$where = array('username' => $username, 'password' => $password, 'level >=' => '1', 'level <=' => '2' );

		$result = $this->M_databases->select('user',$where)->result_array();

		if (!empty($result)) {
			$user = array(
				'username' => $username,
				'log_in' => true,
				'level' => $result[0]['level'],
				'profile' => $result
			);

			$this->session->set_userdata($user);

			redirect('admin/Beranda/home');
		}else{
			$this->session->set_flashdata('Logerr', 'Wrong Username Or Password! Please Try Again...');

			redirect('admin/Welcome/login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('admin/Welcome/login');
	}
}