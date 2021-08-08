<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lampiran extends CI_Controller {

	function __construct() {
		parent :: __construct();

		if ($this->session->userdata('role') != "admin") {
			$this->session->set_flashdata('pesan', 'Anda Belum Login');
			redirect(site_url('home/login'));
			exit;
		}
		$this->load->model('model_lampiran');
		$this->load->model('model_pembuatan');
		$this->load->model('model_jenis');
	}

	public function index()
	{
		$data['tabellampiran'] = $this->model_lampiran->getdata();
		$data['content'] = 'view_lampiran';
		$data['title'] = 'Lampiran';
		$this->load->view('admin/template_admin', $data);
	}

	public function filter()
	{
		$id = $this->uri->segment(4);
		$data['tabellampiran'] = $this->model_lampiran->filterbydata('id_pembuatan',$id);
		$data['pembuatan'] = $this->model_pembuatan->selectdata($id);
		$data['tabeljenis'] = $this->model_jenis->getdata();
		$data['content'] = 'view_lampiran';
		$data['title'] = 'Lampiran';
        // echo json_encode($data);
		$this->load->view('admin/template_admin', $data);
	}
	
	public function add()
	{
		$data['content'] = 'view_add_lampiran';
		$data['title'] = 'Add Lampiran';
		$this->load->view('admin/template_admin', $data);
	}

	public function save()
	{
        $check = array(
        'id_pembuatan'=>$this->input->post('id_pembuatan'),
        'id_jenis'=>$this->input->post('id_jenis')
        );
		if ($this->model_lampiran->countdataexist($check)>0) {
		    $this->model_lampiran->deletefileexist($check);
		    $this->model_lampiran->deletedataexist($check);
        }
        
		$data = array(
			'id_pembuatan'=>$this->input->post('id_pembuatan'),
			'id_jenis'=>$this->input->post('id_jenis'),
            'file'=>$this->model_lampiran->uploadfile()
			);
		$this->load->model('model_lampiran');
		$this->model_lampiran->insertdata($data);
		
		redirect(site_url('admin/lampiran/filter/'.$this->input->post('id_pembuatan')));
	}

	public function delete()
	{
		$id = $this->uri->segment(4);
		$id1 = $this->uri->segment(5);
		$this->model_lampiran->deletefile($id);
		$this->model_lampiran->deletedata($id);
		
		redirect(site_url('admin/lampiran/filter/'.$id1));
	}
	
	public function edit() 
	{
		$id = $this->uri->segment(4);
		$data['rowlampiran'] = $this->model_lampiran->selectdata($id);
		$data['content'] = 'view_edit_lampiran';
		$data['title'] = 'Edit Lampiran';
		$this->load->view('admin/template_admin', $data);
	}
	
	public function update()
	{
		$id = $this->uri->segment(4);
		$data = array(
			'lampiran'=>$this->input->post('lampiran'),
			'tipe'=>$this->input->post('tipe')
			);
		$this->load->model('model_lampiran');
		$this->model_lampiran->updatedata($data, $id);
		
		redirect(site_url('admin/lampiran'));	
	}
}
