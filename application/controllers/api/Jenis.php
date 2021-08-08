<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	function __construct() {
		parent :: __construct();
		$this->load->model('model_jenis');
	}

	public function index()
	{
		$data['error'] = false;
		$data['message'] = 'Berhasil mendapatkan data jenis';
		$data['semuajenis'] = $this->model_jenis->getdata();
        echo json_encode($data);
	}

    public function all()
    {
        $id = $this->uri->segment(4);
        if ($this->model_jenis->countdataby('id_jenis', $id) == 0) {
            $data["error"] = true;
            $data["message"] = "Belum menambahkan jenis";
        } else {
            $data['error'] = false;
            $data['message'] = 'Berhasil mendapatkan data jenis';
            $data['jenis'] = $this->model_jenis->selectdataby('id_jenis',$id);
        }
        echo json_encode($data);
    }
    
}
