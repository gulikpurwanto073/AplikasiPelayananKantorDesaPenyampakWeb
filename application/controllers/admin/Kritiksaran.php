<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritiksaran extends CI_Controller {

	function __construct() {
		parent :: __construct();

		if ($this->session->userdata('role') != "admin") {
			$this->session->set_flashdata('pesan', 'Anda Belum Login');
			redirect(site_url('home/login'));
			exit;
		}
		$this->load->model('model_kritiksaran');
	}

	public function index()
	{
		$data['tabelkritiksaran'] = $this->model_kritiksaran->getdata();
		$data['content'] = 'view_kritiksaran';
		$data['title'] = 'Kritiksaran';
		$this->load->view('admin/template_admin', $data);
	}
	
	public function add()
	{
		$data['content'] = 'view_add_kritiksaran';
		$data['title'] = 'Add Kritiksaran';
		$this->load->view('admin/template_admin', $data);
	}

	public function save()
	{
		$data = array(
			'kritiksaran'=>$this->input->post('kritiksaran'),
			'tipe'=>$this->input->post('tipe')
			);
		$this->load->model('model_kritiksaran');
		$this->model_kritiksaran->insertdata($data);
		
		redirect(site_url('admin/kritiksaran'));
	}

	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->model_kritiksaran->deletedata($id);
		
		redirect(site_url('admin/kritiksaran'));
	}
	
	public function edit() 
	{
		$id = $this->uri->segment(4);
		$data['rowkritiksaran'] = $this->model_kritiksaran->selectdata($id);
		$data['content'] = 'view_edit_kritiksaran';
		$data['title'] = 'Edit Kritiksaran';
		$this->load->view('admin/template_admin', $data);
	}
	
	public function update()
	{
		$id = $this->uri->segment(4);
		$data = array(
			'kritiksaran'=>$this->input->post('kritiksaran'),
			'tipe'=>$this->input->post('tipe')
			);
		$this->load->model('model_kritiksaran');
		$this->model_kritiksaran->updatedata($data, $id);
		
		redirect(site_url('admin/kritiksaran'));	
	}
}
