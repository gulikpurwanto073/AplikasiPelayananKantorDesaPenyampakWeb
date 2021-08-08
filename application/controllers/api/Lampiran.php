<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lampiran extends CI_Controller {

	function __construct() {
		parent :: __construct();
		$this->load->model('model_lampiran');
		$this->load->model('model_pembuatan');
		$this->load->model('model_jenis');
	}

	public function index()
	{
		$data['semualampiran'] = $this->model_lampiran->getdata();

		$data['error'] = false;
		$data['message'] = 'Berhasil mendapatkan data lampiran';
        echo json_encode($data);
	}

	public function filterbyarray()
	{
        $array = array(
            'id_pembuatan'=>$this->uri->segment(4),
            'id_jenis'=>$this->uri->segment(5)
        );
		$data['lampiran'] = $this->model_lampiran->selectdataexist($array);

		$data['error'] = false;
		$data['message'] = 'Berhasil mendapatkan data lampiran';
        echo json_encode($data);
	}

	public function filter()
	{
		$id = $this->uri->segment(4);
		$data['semualampiran'] = $this->model_lampiran->filterbydata('id_pembuatan',$id);
		$data['pembuatan'] = $this->model_pembuatan->selectdata($id);
		$data['tabeljenis'] = $this->model_jenis->getdata();

		$data['error'] = false;
		$data['message'] = 'Berhasil mendapatkan data lampiran';
        echo json_encode($data);
	}

	public function save()
	{
        $check = array(
        'id_pembuatan'=>$this->uri->segment(4),
        'id_jenis'=>$this->uri->segment(5)
        );
		if ($this->model_lampiran->countdataexist($check)>0) {
		    $this->model_lampiran->deletefileexist($check);
		    $this->model_lampiran->deletedataexist($check);
        }
        
		$data = array(
            'id_pembuatan'=>$this->uri->segment(4),
            'id_jenis'=>$this->uri->segment(5),
            'file'=>$this->model_lampiran->uploadfile()
			);
        $this->model_lampiran->insertdata($data);

		$data['error'] = false;
		$data['message'] = 'Berhasil menambahkan data lampiran';
        echo json_encode($data);
	}

	public function delete()
	{
		$id = $this->uri->segment(4);
		$id1 = $this->uri->segment(5);
		$this->model_lampiran->deletefile($id);
		$this->model_lampiran->deletedata($id);

		$data['error'] = false;
		$data['message'] = 'Berhasil menghapus data lampiran';
        echo json_encode($data);
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

		$data['error'] = false;
		$data['message'] = 'Berhasil mengubah data lampiran';
        echo json_encode($data);
	}
}
