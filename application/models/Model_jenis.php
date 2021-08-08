<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jenis extends CI_Model {

	public function getdata()
	{
		$this->db->order_by('id_jenis');
		return $this->db->get('jenis')->result();
	}

	public function countdata()
	{
		return $this->db->get('jenis')->num_rows();
	}

	public function countdataby($col,$id)
	{
		$this->db->where($col, $id);
		return $this->db->get('jenis')->num_rows();
	}
	
	public function insertdata($data)
	{
		$this->db->insert('jenis', $data);
	}
	
	public function deletedata($id)
	{
		$this->db->where('id_jenis', $id);
		$this->db->delete('jenis');
	}

	public function selectdata($id)
	{
		$this->db->where('id_jenis', $id);
		return $this->db->get('jenis')->row();
	}

	public function selectdataby($col,$id)
	{
		$this->db->where($col, $id);
		return $this->db->get('jenis')->row();
	}

	public function selectmaxdataby($col,$id)
	{
		$this->db->select_max('id_jenis');
		$this->db->where($col, $id);
		return $this->db->get('jenis')->row();
	}
	
	public function updatedata($data, $id)
	{
		$this->db->where('id_jenis', $id);
		$this->db->update('jenis', $data);
	}

}
