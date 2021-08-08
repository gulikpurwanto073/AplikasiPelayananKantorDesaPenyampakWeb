<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() 
	{
		$this->load->model('model_login');
		$rowlogin = $this->model_login->cek($this->input->post('username'), $this->input->post('password'));
		if ($rowlogin) 
		{
			$response["error"] = FALSE;
			$response["user"]["username"] = $rowlogin->username;
			$response["user"]["role"] = $rowlogin->role;
			echo json_encode($response);
			
		}
		else
		{
			$response["error"] = TRUE;
			$response["error_msg"] = "Login gagal. Password/Email salah";
			echo json_encode($response);
		}
		
	}

    public function all()
    {
        $id = $this->uri->segment(4);

		$data['error'] = false;
		$data['message'] = 'Berhasil mendapatkan data user';
		$this->load->model('model_login');
		$data['user'] = $this->model_login->selectdata($id);

        echo json_encode($data);
    }
	
	public function user() 
	{
		$id = $this->uri->segment(4);
		$this->load->model('model_customer');
		if ($rowlogin) 
		{
			$response["error"] = FALSE;
			$response["user"]["id_customer"] = $rowcustomer->id_customer;
			$response["user"]["nama"] = $rowlogin->nama;
			$response["user"]["deskripsi"] = $rowcustomer->deskripsi;
			$response["user"]["nik"] = $rowcustomer->nik;
			$response["user"]["jk"] = $rowcustomer->jk;
			$response["user"]["agama"] = $rowcustomer->agama;
			$response["user"]["tempat_lahir"] = $rowcustomer->tempat_lahir;
			$response["user"]["tanggal_lahir"] = $rowcustomer->tanggal_lahir;
			$response["user"]["alamat"] = $rowcustomer->alamat;
			$response["user"]["telepon"] = $rowcustomer->telepon;
			$response["user"]["email"] = $rowcustomer->email;
			$response["user"]["foto"] = $rowcustomer->foto;
			$response["user"]["username"] = $rowlogin->username;
			echo json_encode($response);
			
		}
		else
		{
			$response["error"] = TRUE;
			$response["error_msg"] = "Login gagal. Password/Email salah";
			echo json_encode($response);
		}
		
	}

	public function save()
	{
		$data = array(
			'nama'=>$this->input->post('nama'),
			'username'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'role'=>'user'
			);

		$this->load->model('model_login');

		$this->model_login->insertdata($data);

		$responseJson["error"] = false;
		$responseJson["message"] = "Berhasil menambahkan ke database";

		echo json_encode($responseJson);
	}
	
	public function update()
	{
		$id = $this->uri->segment(4);
        $data = array(
            'password'=>$this->input->post('password'),
            'nama'=>$this->input->post('nama'),
            );

		$this->load->model('model_login');
		$this->model_login->updatedata($data, $id);

        $responseJson["error"] = false;
        $responseJson["message"] = "Berhasil mengupdate data ke database";
        echo json_encode($responseJson);
	}
	
	public function upload()
	{
		$id = $this->uri->segment(4);
		$this->load->model('model_login');
		$data = array(
            'foto'=>$this->model_login->uploadfoto()
			);

        $this->model_login->deletefoto($id);
		$this->model_login->updatedata($data, $id);

        $responseJson["error"] = false;
        $responseJson["message"] = "Berhasil mengupdate data ke database";
        echo json_encode($responseJson);
	}
}