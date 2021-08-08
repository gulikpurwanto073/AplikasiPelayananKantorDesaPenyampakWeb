<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembuatan extends CI_Controller {

	function __construct() {
		parent :: __construct();

		if ($this->session->userdata('role') != "admin") {
			$this->session->set_flashdata('pesan', 'Anda Belum Login');
			redirect(site_url('home/login'));
			exit;
		}
		$this->load->model('model_pembuatan');
	}

	public function index()
	{
		$data['tabelpembuatan'] = $this->model_pembuatan->getdata();
		$data['content'] = 'view_pembuatan';
		$data['title'] = 'Pembuatan';
		$this->load->view('admin/template_admin', $data);
	}
	
	public function add()
	{
		$data['content'] = 'view_add_pembuatan';
		$data['title'] = 'Add Pembuatan';
		$this->load->view('admin/template_admin', $data);
	}

	public function save()
	{
		$data = array(
			'nama'=>$this->input->post('nama'),
			'tempat_lahir'=>$this->input->post('tempat_lahir'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'alamat'=>$this->input->post('alamat'),
			'rtrw'=>$this->input->post('rtrw'),
			'keldesa'=>$this->input->post('keldesa'),
			'kecamatan'=>$this->input->post('kecamatan'),
			'agama'=>$this->input->post('agama'),
			'status_pekerjaan'=>$this->input->post('status_pekerjaan'),
			'status_pernikahan'=>$this->input->post('status_pernikahan'),
			'kewarganegaraan'=>$this->input->post('kewarganegaraan'),
			'berlaku_hingga'=>$this->input->post('berlaku_hingga'),
			'nik'=>$this->input->post('nik'),
			'username'=>$this->input->post('username')
			);
		$this->load->model('model_pembuatan');
		$this->model_pembuatan->insertdata($data);
		
		redirect(site_url('admin/pembuatan'));
	}

	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->model_pembuatan->deletedata($id);
		
		redirect(site_url('admin/pembuatan'));
	}
	
	public function edit() 
	{
		$id = $this->uri->segment(4);
		$data['rowpembuatan'] = $this->model_pembuatan->selectdata($id);
		$data['content'] = 'view_edit_pembuatan';
		$data['title'] = 'Edit Pembuatan';
		$this->load->view('admin/template_admin', $data);
	}
	
	public function update()
	{
		$id = $this->uri->segment(4);
		$data = array(
			'nama'=>$this->input->post('nama'),
			'tempat_lahir'=>$this->input->post('tempat_lahir'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'alamat'=>$this->input->post('alamat'),
			'rtrw'=>$this->input->post('rtrw'),
			'keldesa'=>$this->input->post('keldesa'),
			'kecamatan'=>$this->input->post('kecamatan'),
			'agama'=>$this->input->post('agama'),
			'status_pekerjaan'=>$this->input->post('status_pekerjaan'),
			'status_pernikahan'=>$this->input->post('status_pernikahan'),
			'kewarganegaraan'=>$this->input->post('kewarganegaraan'),
			'berlaku_hingga'=>$this->input->post('berlaku_hingga'),
			'nik'=>$this->input->post('nik'),
			'username'=>$this->input->post('username')
			);
		$this->load->model('model_pembuatan');
		$this->model_pembuatan->updatedata($data, $id);
		
		redirect(site_url('admin/pembuatan'));	
	}
	
	public function updatestatus()
	{
		$id = $this->uri->segment(4);
		$data = array(
			'status_pembuatan'=>$this->input->post('status_pembuatan'),
			'catatan'=>$this->input->post('catatan')
			);
		$this->load->model('model_pembuatan');
		$this->model_pembuatan->updatedata($data, $id);
		
		redirect(site_url('admin/lampiran/filter/'.$id));
	}
}
