<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lampiran extends CI_Model {

	public function getdata()
	{
		$this->db->order_by('id_lampiran');
		return $this->db->get('lampiran')->result();
	}

	public function filterbydata($col,$id)
	{

		$this->db->where($col,$id);
		return $this->db->get('lampiran')->result();
	}

	public function countdata()
	{
		return $this->db->get('lampiran')->num_rows();
	}

	public function countdataexist($array)
	{
		$this->db->where($array);
		return $this->db->get('lampiran')->num_rows();
	}

	public function countdataby($col,$id)
	{
		$this->db->where($col, $id);
		return $this->db->get('lampiran')->num_rows();
	}
	
	public function insertdata($data)
	{
		$this->db->insert('lampiran', $data);
	}
	
	public function deletedata($id)
	{
		$this->db->where('id_lampiran', $id);
		$this->db->delete('lampiran');
	}
	
	public function deletedataexist($array)
	{
		$this->db->where($array);
		$this->db->delete('lampiran');
	}

	public function selectdata($id)
	{
		$this->db->where('id_lampiran', $id);
		return $this->db->get('lampiran')->row();
	}

	public function selectdataexist($array)
	{
		$this->db->where($array);
		return $this->db->get('lampiran')->row();
	}

	public function selectdataby($col,$id)
	{
		$this->db->where($col, $id);
		return $this->db->get('lampiran')->row();
	}

	public function selectmaxdataby($col,$id)
	{
		$this->db->select_max('id_lampiran');
		$this->db->where($col, $id);
		return $this->db->get('lampiran')->row();
	}
	
	public function updatedata($data, $id)
	{
		$this->db->where('id_lampiran', $id);
		$this->db->update('lampiran', $data);
	}

    public function uploadfile()
    {
        $config['upload_path']          = 'assets/upload/lampiran/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
        $config['file_name']            = uniqid();
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    public function deletefile($id)
    {
        $lampiran = $this->selectdata($id);
        if ($lampiran->file != "default.jpg") {
            $filename = explode(".", $lampiran->file)[0];
            return array_map('unlink', glob(FCPATH."assets/upload/lampiran/$filename.*"));
        }
    }

    public function deletefileexist($array)
    {
        $lampiran = $this->selectdataexist($array);
        if ($lampiran->file != "default.jpg") {
            $filename = explode(".", $lampiran->file)[0];
            return array_map('unlink', glob(FCPATH."assets/upload/lampiran/$filename.*"));
        }
    }

}
