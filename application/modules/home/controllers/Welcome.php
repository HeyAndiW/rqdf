<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('home/M_databases');
	}

	public function index(){
		if ($this->session->userdata('level') == 'admin') {
			$this->logout();
		}

		$data['Logerr'] = $this->session->flashdata('Logerr');
		$data['Urror'] = $this->session->flashdata('Urror');
		$data['username'] = $this->session->userdata('username');
		$data['profile'] = $this->session->userdata('profile');

		$this->load->view('header');
		$this->load->view('utama',$data);
		$this->load->view('footer');
	}

	public function login(){
		$data['Logerr'] = $this->session->flashdata('Logerr');

		$this->load->view('header');
		$this->load->view('login', $data);
		$this->load->view('footer');
	}

	function signUp(){
		$config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 30000;
		
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar_berita')){
            $this->session->set_flashdata('Urror', $this->upload->display_errors());
            redirect('home/Welcome' , 'refresh');
        }
        else{
        	$gbr = $this->upload->data();

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'username' => $username,
				'name' => $name,
				'password' => $password,
				'level' => 5,
				'photo_name' => $gbr['file_name']
			);

			print_r($this->upload->data());

        	// $this->session->set_flashdata('upload_data', $this->upload->data());
			// $this->m_databases->insert('berita', $data);
            
            redirect('admin' , 'refresh');
        }

	}

	function do_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$where = array('username' => $username, 'password' => $password, 'level !=' => '1');

		$result = $this->M_databases->select('user',$where)->result_array();

		if (!empty($result)) {
			$user = array(
				'username' => $username,
				'log_in' => true,
				'level' => 'user',
				'profile' => $result
			);

			$this->session->set_userdata($user);

			redirect('home/Welcome');
		}else{
			$this->session->set_flashdata('Logerr', 'Wrong Username Or Password! Please Try Again...');

			redirect('home/Welcome/');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('home/Welcome/');
	}

	function sign_up(){
		$username = $this->input->post('username');
		$name = $this->input->post('name');
		$password = md5($this->input->post('password'));
		$email = $this->input->post('email');

		$where = array(
			'username' => $username,
			'name' => $name,
			'password' => $password,
			'email' => $email,
			'level' => '5',
			'photo_name' => '0.png'
		);

		$this->M_databases->insert('user', $where);
	}
}
