<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritiksaran extends CI_Controller {

	function __construct() {
		parent :: __construct();
		$this->load->model('model_kritiksaran');
		$this->load->model('model_login');
	}

	// public function index()
	// {
	// 	$data['error'] = false;
	// 	$data['message'] = 'Berhasil mendapatkan data kritiksaran';
	// 	$data['tabelkritiksaran'] = $this->model_vkritiksaran->getdata();
    //     echo json_encode($data);
	// }

	public function filter()
	{
		$id = $this->uri->segment(4);
		$data['semuakritiksaran'] = $this->model_kritiksaran->filterbydata('username',$id);

		$data['error'] = false;
		$data['message'] = 'Berhasil mendapatkan data kritiksaran ktp';
        echo json_encode($data);
	}

    public function all()
    {
        $id = $this->uri->segment(4);
        if ($this->model_kritiksaran->countdataby('id_kritiksaran', $id) == 0) {
            $data["error"] = true;
            $data["message"] = "Belum menambahkan kritiksaran ktp";
        } else {
            $data['error'] = false;
            $data['message'] = 'Berhasil mendapatkan data kritiksaran';
            $data['kritiksaran'] = $this->model_kritiksaran->selectdataby('id_kritiksaran',$id);
        }
        echo json_encode($data);
    }

	public function save()
	{
		$data = array(
			'kritiksaran'=>$this->input->post('kritiksaran'),
			'username'=>$this->input->post('username')
			);
		$this->model_kritiksaran->insertdata($data);
		
		$responseJson["error"] = false;
        $responseJson["message"] = "Berhasil menambahkan ke database";
        echo json_encode($responseJson);
	}

	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->model_kritiksaran->deletedata($id);
		
		$responseJson["error"] = false;
        $responseJson["message"] = "Berhasil menghapus dari database";
        echo json_encode($responseJson);
	}
	
	public function update()
	{
		$id = $this->uri->segment(4);
		$data = array(
			'kritiksaran'=>$this->input->post('kritiksaran'),
			'username'=>$this->input->post('username')
        );
		$this->model_kritiksaran->updatedata($data, $id);
		
		$responseJson["error"] = false;
        $responseJson["message"] = "Berhasil menambahkan ke database";
        echo json_encode($responseJson);
	}

}
