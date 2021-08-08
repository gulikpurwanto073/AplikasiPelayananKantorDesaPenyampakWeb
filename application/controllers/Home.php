<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['content'] = 'view_index';
		$data['title'] = 'Index';
		$this->load->view('template', $data); 
	}

	public function login()
	{
		$data['content'] = 'view_login';
		$data['title'] = 'Login';
		$this->load->view('template_login', $data); 
	}

	public function daftar()
	{
		$data['content'] = 'view_daftar';
		$data['title'] = 'Daftar';
		$this->load->view('template_login', $data); 
	}
	
	public function ceklogin() 
	{
		$this->load->model('model_login');
		$rowlogin = $this->model_login->cek($this->input->post('username'), $this->input->post('password'));
		if ($rowlogin) 
		{
			$data = array(
				'userlogin'=>$rowlogin->username,
				'nama'=>$rowlogin->nama,
				'role'=>$rowlogin->role
			);
			
			$this->session->set_userdata($data);
			redirect($rowlogin->role.'/home');
		}
		else
		{
			$this->session->set_flashdata('message', 'Login Gagal');
			redirect('home/login/login gagal');
		}
		
	}
	
	public function logout() 
	{
		$this->session->sess_destroy();
		redirect('home/index');
	}
}