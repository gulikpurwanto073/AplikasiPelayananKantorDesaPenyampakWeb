<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	function __construct() {
		parent :: __construct();

		if ($this->session->userdata('role') != "admin") {
			$this->session->set_flashdata('pesan', 'Anda Belum Login');
			redirect(site_url('home/login'));
			exit;
		}
		$this->load->model('model_jenis');
	}

	public function index()
	{
		$data['tabeljenis'] = $this->model_jenis->getdata();
		$data['content'] = 'view_jenis';
		$data['title'] = 'Jenis';
		$this->load->view('admin/template_admin', $data);
	}
	
	public function add()
	{
		$data['content'] = 'view_add_jenis';
		$data['title'] = 'Add Jenis';
		$this->load->view('admin/template_admin', $data);
	}

	public function save()
	{
		$data = array(
			'jenis'=>$this->input->post('jenis'),
			'tipe'=>$this->input->post('tipe')
			);
		$this->load->model('model_jenis');
		$this->model_jenis->insertdata($data);
		
		redirect(site_url('admin/jenis'));
	}

	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->model_jenis->deletedata($id);
		
		redirect(site_url('admin/jenis'));
	}
	
	public function edit() 
	{
		$id = $this->uri->segment(4);
		$data['rowjenis'] = $this->model_jenis->selectdata($id);
		$data['content'] = 'view_edit_jenis';
		$data['title'] = 'Edit Jenis';
		$this->load->view('admin/template_admin', $data);
	}
	
	public function update()
	{
		$id = $this->uri->segment(4);
		$data = array(
			'jenis'=>$this->input->post('jenis'),
			'tipe'=>$this->input->post('tipe')
			);
		$this->load->model('model_jenis');
		$this->model_jenis->updatedata($data, $id);
		
		redirect(site_url('admin/jenis'));	
	}
}
