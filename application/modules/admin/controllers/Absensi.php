<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends MX_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('home/M_databases');
	}

//---------------------- Absensi 
	public function hitung_jml(){
		if ($this->session->userdata('level') == 'user' || empty($this->session->userdata('level'))) {
			redirect('admin/Welcome/logout');
		}
		$data['username'] = $this->session->userdata('username');
		$data['profile'] = $this->session->userdata('profile');	
		$data['level'] = $this->session->userdata('level');
		$data['jadwal1'] = $this->M_databases->select('tabsensi', array('tabsensi.status'=>'HADIR','id_jadwal'=>'1'), 'tpegawai', 'tpegawai.id = tabsensi.id', array('tabsensi.id_jadwal','tabsensi.id'), '*, COUNT(tabsensi.id) AS total')->result_array();
		$data['jadwal2'] = $this->M_databases->select('tabsensi', array('tabsensi.status'=>'HADIR','id_jadwal'=>'2'), 'tpegawai', 'tpegawai.id = tabsensi.id', array('tabsensi.id_jadwal','tabsensi.id'), '*, COUNT(tabsensi.id) AS total')->result_array();
		$data['jadwal3'] = $this->M_databases->select('tabsensi', array('tabsensi.status'=>'HADIR','id_jadwal'=>'3'), 'tpegawai', 'tpegawai.id = tabsensi.id', array('tabsensi.id_jadwal','tabsensi.id'), '*, COUNT(tabsensi.id) AS total')->result_array();
		$data['jadwal4'] = $this->M_databases->select('tabsensi', array('tabsensi.status'=>'HADIR','id_jadwal'=>'4'), 'tpegawai', 'tpegawai.id = tabsensi.id', array('tabsensi.id_jadwal','tabsensi.id'), '*, COUNT(tabsensi.id) AS total')->result_array();

		$this->load->view('header', $data);
		$this->load->view('lihat_data_absensi', $data);
		$this->load->view('modal');
		$this->load->view('footer');
	}

	public function detail_absensi(){	
		if ($this->session->userdata('level') == 'user' || empty($this->session->userdata('level'))) {
			redirect('admin/Welcome/logout');
		}
		$data['username'] = $this->session->userdata('username');
		$data['profile'] = $this->session->userdata('profile');	
		$data['level'] = $this->session->userdata('level');
		$data['tpegawai'] = $this->M_databases->select('tpegawai',array('tpegawai.id' => $this->input->get('id')))->result_array();
		$data['detail_absensi'] = $this->M_databases->select('tabsensi', array('tabsensi.id' => $this->input->get('id')))->result_array();

		$this->load->view('header', $data);
		$this->load->view('detail_absensi', $data);
		$this->load->view('modal');
		$this->load->view('footer');
	}

}