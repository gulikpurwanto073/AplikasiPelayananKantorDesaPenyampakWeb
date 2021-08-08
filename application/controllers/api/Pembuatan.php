<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembuatan extends CI_Controller {

	function __construct() {
		parent :: __construct();
		$this->load->model('model_pembuatan');
		$this->load->model('model_login');
	}

	// public function index()
	// {
	// 	$data['error'] = false;
	// 	$data['message'] = 'Berhasil mendapatkan data pembuatan';
	// 	$data['tabelpembuatan'] = $this->model_vpembuatan->getdata();
    //     echo json_encode($data);
	// }

	public function filter()
	{
		$id = $this->uri->segment(4);
		$data['semuapembuatan'] = $this->model_pembuatan->filterbydata('username',$id);

		$data['error'] = false;
		$data['message'] = 'Berhasil mendapatkan data pembuatan ktp';
        echo json_encode($data);
	}

    public function all()
    {
        $id = $this->uri->segment(4);
        if ($this->model_pembuatan->countdataby('id_pembuatan', $id) == 0) {
            $data["error"] = true;
            $data["message"] = "Belum menambahkan pembuatan ktp";
        } else {
            $data['error'] = false;
            $data['message'] = 'Berhasil mendapatkan data pembuatan';
            $data['pembuatan'] = $this->model_pembuatan->selectdataby('id_pembuatan',$id);
        }
        echo json_encode($data);
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
		$this->model_pembuatan->insertdata($data);
		
		$responseJson["error"] = false;
        $responseJson["message"] = "Berhasil menambahkan ke database";
        echo json_encode($responseJson);
	}

	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->model_pembuatan->deletedata($id);
		
		$responseJson["error"] = false;
        $responseJson["message"] = "Berhasil menghapus dari database";
        echo json_encode($responseJson);
	}

	public function kirim()
	{
		$id = $this->uri->segment(4);
		$data = array(
			'status_pembuatan'=>'Dikirim'
        );
		$this->model_pembuatan->updatedata($data, $id);
		
		$responseJson["error"] = false;
        $responseJson["message"] = "Berhasil menghapus dari database";
        echo json_encode($responseJson);
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
		$this->model_pembuatan->updatedata($data, $id);
		
		$responseJson["error"] = false;
        $responseJson["message"] = "Berhasil menambahkan ke database";
        echo json_encode($responseJson);
	}

}
