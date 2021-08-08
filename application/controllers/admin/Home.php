<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent :: __construct();

		if ($this->session->userdata('role') != "admin") {
			$this->session->set_flashdata('pesan', 'Anda Belum Login');
			redirect(site_url('home/login'));
			exit;
		}
		$this->load->model('model_login');
	}

	public function index()
	{
		$data['content'] = 'view_admin';
		$data['title'] = 'Admin';
		$this->load->view('admin/template_admin', $data);
	}

	public function cekusername() 
	{
		$row = $this->model_login->cek_username($this->input->post('username'));
		if ($row) 
		{
			
		}
		else
		{
			
		}
		
	}

	public function ganti_password()
	{
		$data['content'] = 'view_ganti_password';
		$data['title'] = 'Ganti Password';
		$this->load->view('admin/template_admin', $data);
	}
	
	public function update_password()
	{
		$username = $this->session->userdata('userlogin');
		$rowlogin = $this->model_login->cek($username, $this->input->post('lama'));
		if ($rowlogin) 
		{
			if ($this->input->post('baru') == $this->input->post('konfirmasi')) {
				$data = array(
					'password'=>$this->input->post('baru')
					);
				$this->model_login->updatedata($data, $username);
				
				$this->session->set_flashdata('success', 'Password Berhasil Diubah');
				redirect(site_url('admin/home/ganti_password'));	
			} else {
				$this->session->set_flashdata('failed', 'Password Baru Tidak Sama Dengan Konfirmasi');
				redirect(site_url('admin/home/ganti_password'));		
			}
		}
		else
		{
			$this->session->set_flashdata('failed', 'Password Lama Salah');
			redirect(site_url('admin/home/ganti_password'));
		}

		
	}

	public function user()
	{
		$data['tabellogin'] = $this->model_login->selectdataby('role !=','mahasiswa');
		$data['content'] = 'view_user';
		$data['title'] = 'User';
		$this->load->view('admin/template_admin', $data);
	}

	public function add_user()
	{
		$data['content'] = 'view_add_user';
		$data['title'] = 'Add User';
		$this->load->view('admin/template_admin', $data);
	}
	
	public function edit_user() 
	{
		$id = $this->uri->segment(4);
		$data['rowlogin'] = $this->model_login->selectdata($id);
		$data['content'] = 'view_edit_user';
		$data['title'] = 'Edit User';
		$this->load->view('admin/template_admin', $data);
	}

	public function save()
	{
		$data = array(
			'nama'=>$this->input->post('nama'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'role'=>$this->input->post('role'),
			'foto'=>$this->model_login->uploadfoto()
			);
		$this->model_login->insertdata($data);
		
		redirect(site_url('admin/home/user'));
	}

	public function update()
	{
		$id = $this->uri->segment(4);
		if (!empty($_FILES["foto"]["name"])) {
			$data = array(
				'nama'=>$this->input->post('nama'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'role'=>$this->input->post('role'),
				'foto'=>$this->model_login->uploadfoto()
				);
		} else {
			$data = array(
				'nama'=>$this->input->post('nama'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'role'=>$this->input->post('role'),
				'foto'=>$this->input->post('old_foto')
				);
		}
		
		$this->model_login->deletefoto($id);
		$this->model_login->updatedata($data, $id);
		
		redirect(site_url('admin/home/user'));
	}

	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->model_login->deletefoto($id);
		$this->model_login->deletedata($id);
		
		redirect(site_url('admin/home/user'));
	}
}
