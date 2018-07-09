<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MX_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('home/M_databases');
	}
/*-------------------view-------------------*/
	public function home(){
		if ($this->session->userdata('level') == 'user' || empty($this->session->userdata('level'))) {
			redirect('admin/Welcome/logout');
		}
		$data['username'] = $this->session->userdata('username');
		$data['profile'] = $this->session->userdata('profile');	
		$data['level'] = $this->session->userdata('level');
		$data['tpegawai'] =$this->M_databases->select('tpegawai')->result_array();

		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('modal');
		$this->load->view('footer');
	}

	public function kelola_data_pegawai(){
		if ($this->session->userdata('level') == 'user' || empty($this->session->userdata('level'))) {
			redirect('admin/Welcome/logout');
		}
		$data['username'] = $this->session->userdata('username');
		$data['profile'] = $this->session->userdata('profile');	
		$data['level'] = $this->session->userdata('level');
		$data['tpegawai'] =$this->M_databases->select('tpegawai')->result_array();

		$this->load->view('header', $data);
		$this->load->view('kelola_data_pegawai', $data);
		$this->load->view('modal');
		$this->load->view('footer');
	}

	public function kelola_absensi_pegawai(){
		if ($this->session->userdata('level') == 'user' || empty($this->session->userdata('level'))) {
			redirect('admin/Welcome/logout');
		}
		$data['username'] = $this->session->userdata('username');
		$data['profile'] = $this->session->userdata('profile');	
		$data['level'] = $this->session->userdata('level');
		$data['tpegawai'] =$this->M_databases->select('tpegawai', array('jabatan' => 'guru'))->result_array();

		$this->load->view('header', $data);
		$this->load->view('kelola_absensi', $data);
		$this->load->view('modal');
		$this->load->view('footer');
	}

	public function lihat_absensi(){
		if ($this->session->userdata('level') == 'user' || empty($this->session->userdata('level'))) {
			redirect('admin/Welcome/logout');
		}
		$data['username'] = $this->session->userdata('username');
		$data['profile'] = $this->session->userdata('profile');	
		$data['level'] = $this->session->userdata('level');
		$data['tpegawai'] =$this->M_databases->select('tpegawai', array('jabatan' => 'guru'), 'tabsensi', 'tpegawai.id = tabsensi.id')->result_array(); //lihat database nya kemana

		$this->load->view('header', $data);
		$this->load->view('lihat_data_absensi', $data);
		$this->load->view('modal');
		$this->load->view('footer');
	}

	public function kelola_informasi_jadwal(){
		if ($this->session->userdata('level') == 'user' || empty($this->session->userdata('level'))) {
			redirect('admin/Welcome/logout');
		}
		$data['username'] = $this->session->userdata('username');
		$data['profile'] = $this->session->userdata('profile');	
		$data['level'] = $this->session->userdata('level');
		$data['tpegawai'] =$this->M_databases->select('tpegawai')->result_array();

		$this->load->view('header', $data);
		$this->load->view('kelola_informasi_jadwal', $data);
		$this->load->view('modal');
		$this->load->view('footer');
	}

/*-------------------modal-------------------*/	
public function Tambah_data_pegawai(){
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');

		$where = array(
			'Nama' => $nama,
			'jabatan' => $jabatan,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'email' => $email,
			'level' => 2,
			'jenis_kelamin' => $jk
		);

		$this->M_databases->insert('tpegawai', $where);

		redirect('admin/Beranda/kelola_data_pegawai', 'refresh');
	}

	public function Edit_data_pegawai(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');

		$data = array(
			'Nama' => $nama,
			'jabatan' => $jabatan,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'email' => $email,
			'level' => 2,
			'jenis_kelamin' => $jk
		);

		$where = array('id' => $id);
		$this->M_databases->update('tpegawai', $data, $where);

		redirect('admin/Beranda/kelola_data_pegawai', 'refresh');
	}

	public function delete_data_pegawai(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');

		$data = array(
			'Nama' => $nama,
			'jabatan' => $jabatan,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'email' => $email,
			'level' => 2,
			'jenis_kelamin' => $jk
		);

		$where = array('id' => $id);
		$this->M_databases->delete('tpegawai', $where);

		redirect('admin/Beranda/kelola_data_pegawai', 'refresh');
		// print_r($data);
	}

/*-------------------Absensi-------------------*/
public function absensi(){

		$tanggal = date('d');
		$bulan = date('m');
		$tahun = date('Y');
		$id = $this->input->post('absen_id');
		$status = $this->input->post('status');
		// -----------------------------------------------
		$jadwal = @$this->input->post('jadwal');
		for ($i=0; $i < count($id); $i++) { 
			$where = array(
				'tanggal' => $tanggal,
				'bulan' => $bulan,
				'tahun' => $tahun,
				'id' => $id[$i],
				'id_jadwal' => $jadwal,
				'status' => $status[$i]
			);
			$this->M_databases->insert('tabsensi', $where);
		}
		redirect('admin/Beranda/kelola_absensi_pegawai', 'refresh');
	}
}

// public function lihat_absensi(){
// 		$nama = $this->input->post('nama');
// 		$jabatan = $this->input->post('jabatan');

// 		$data
// }