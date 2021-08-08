<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pembuatan extends CI_Model {

	public function getdata()
	{
		$this->db->order_by('id_pembuatan');
		return $this->db->get('pembuatan')->result();
	}

	public function filterbydata($col,$id)
	{

		$this->db->where($col,$id);
		return $this->db->get('pembuatan')->result();
	}

	public function countdata()
	{
		return $this->db->get('pembuatan')->num_rows();
	}

	public function countdataby($col,$id)
	{
		$this->db->where($col, $id);
		return $this->db->get('pembuatan')->num_rows();
	}
	
	public function insertdata($data)
	{
		$this->db->insert('pembuatan', $data);
	}
	
	public function deletedata($id)
	{
		$this->db->where('id_pembuatan', $id);
		$this->db->delete('pembuatan');
	}

	public function selectdata($id)
	{
		$this->db->where('id_pembuatan', $id);
		return $this->db->get('pembuatan')->row();
	}

	public function selectdataby($col,$id)
	{
		$this->db->where($col, $id);
		return $this->db->get('pembuatan')->row();
	}

	public function selectmaxdataby($col,$id)
	{
		$this->db->select_max('id_pembuatan');
		$this->db->where($col, $id);
		return $this->db->get('pembuatan')->row();
	}
	
	public function updatedata($data, $id)
	{
		$this->db->where('id_pembuatan', $id);
		$this->db->update('pembuatan', $data);
	}

}
