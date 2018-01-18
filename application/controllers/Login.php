<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kopustika');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('status') === 'login') {
			redirect(base_url('index.php/login/home'));
			return;
		}
		$this->load->view('login');
	}

	public function home(){
		$this->load->view('home');
	}

	public function user_login() 
	{
		$users_user = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		$result = $this->Kopustika->login($users_user);
		if( $result->row() == null ) {
			redirect(base_url('index.php/login'));
			return;
		}
		$sess_user = array(
			'email' => $result->row('email'),
			'level' => $result->row('level'),
			'status' => 'login'
		);
		
		$this->session->set_userdata($sess_user);
		redirect(base_url('index.php/login/home'));		
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

	public function tambahAnggota(){
		$this->load->view('tambahAnggota');
	}

	public function tambahData() {
		$identitas = array(
			'nama_anggota' => $this->input->post('nama_anggota'),
			'no_hp' => $this->input->post('no_hp'),
			'bank' => $this->input->post('bank'),
			'no_rek' => $this->input->post('no_rek'),
			'alamat' => $this->input->post('alamat')
			);
		// $this->session->set_userdata($identitas);
		if( $this->Kopustika->input($identitas)==TRUE)
		{
			redirect(base_url('index.php/login/info'));
		} else {
			$this->load->view('tambahAnggota');
		}
	}

	public function info() {
		$this->load->view('info');
	}

	public function data() {
		// $this->load->view('data');
		if($this->session->userdata('status') !== 'login') {
			redirect(base_url('index.php/login/'));
			return;
		}
		$data["koperasi"] = $this->Kopustika->tampilAll();
		$this->load->view('data', $data);
	}

	public function peminjaman(){
		$this->load->view('peminjaman');
	}

	public function tagihan() {
		$this->load->view('tagihan');
	}

	public function cari() {
			$no_anggota = $this->input->post('no_anggota');
		
		// $no_anggota = $this->input->post('no_anggota');
		// $nama_anggota = $this->Kopustika->ambilNama($no_anggota);
		// $this->session->set_userdata($temukan);
		// var_dump($nama_anggota);
		// // echo $this->session->userdata('nama_anggota');
		// die();

		redirect(base_url('index.php/login/info?no_anggota=' . $no_anggota));
	}

	public function destroy(){
		// $this->load->model('Kopustika');
		// $identitas = $this->session->userdata($identitas);
		// $temukan = $this->session->userdata($temukan);
		$this->session->unset_userdata($identitas);
		$this->session->unset_userdata($temukan);
		// var_dump($identitas); 
		// 	echo "</pre>";
		// 	die();
		redirect(base_url('index.php/login'));
	}
}
/*

	public function tampil_data()
	{
		if($this->session->userdata('status') !== 'login') {
			redirect(base_url('index.php/login/'));
			return;
		}
		else if($this->session->userdata('level') === '1') {
			$data["mhs"] = $this->Kopustika->tampilAll();
		} else {
			$npm = $this->session->userdata('npm');
			$data["mhs"] = $this->Kopustika->tampilByUser($npm);
		}
		$this->load->view('tampil_data', $data);
	}

	public function daftar() {
		$this->load->view('form');
	}

	public function input_data()
	{

		$user_identitas = array(
			'npm' => $this->input->post('npm'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'jk' => $this->input->post('jk')		
		);
		$users_user = array(
			'email' => $this->input->post('email'),
			'password' => sha1( $this->input->post('password') ),
			'npm' => $this->input->post('npm')
		);

		if( $this->Kopustika->input($user_identitas, $users_user) )
		{
			redirect(base_url('index.php/login'));
		} else {
			$this->load->view('login');
		}
	}

	public function edit_data()
	{
		$npm = $this->uri->segment(3);
		$this->load->model('Kopustika');
		$data["mhs"] = $this->Kopustika->pilih($npm);
		$this->load->view('edit', $data);
	}

	public function update_data()
	{
		$npm = $this->input->post("npm");
		$nama = $this->input->post("nama");
		$alamat = $this->input->post("alamat");
		$jk = $this->input->post("jk");

		$this->load->model('Kopustika');
		$this->Kopustika->update($npm, $nama, $alamat, $jk);
		redirect(base_url("index.php/login/tampil_data"));
	}

	public function delete_data()
	{
		$npm = $this->uri->segment(3);
		$this->load->model('Kopustika');
		$this->Kopustika->delete($npm);
		redirect(base_url("index.php/login/tampil_data"));
	}*/
/* End of file login.php */
/* Location: ./application/controllers/login.php */