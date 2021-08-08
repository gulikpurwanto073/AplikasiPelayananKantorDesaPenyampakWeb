<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kritiksaran extends CI_Model {

	public function getdata()
	{
		$this->db->order_by('id_kritiksaran');
		return $this->db->get('kritiksaran')->result();
	}

	public function filterbydata($col,$id)
	{

		$this->db->where($col,$id);
		return $this->db->get('kritiksaran')->result();
	}

	public function countdata()
	{
		return $this->db->get('kritiksaran')->num_rows();
	}

	public function countdataby($col,$id)
	{
		$this->db->where($col, $id);
		return $this->db->get('kritiksaran')->num_rows();
	}
	
	public function insertdata($data)
	{
		$this->db->insert('kritiksaran', $data);
	}
	
	public function deletedata($id)
	{
		$this->db->where('id_kritiksaran', $id);
		$this->db->delete('kritiksaran');
	}

	public function selectdata($id)
	{
		$this->db->where('id_kritiksaran', $id);
		return $this->db->get('kritiksaran')->row();
	}

	public function selectdataby($col,$id)
	{
		$this->db->where($col, $id);
		return $this->db->get('kritiksaran')->row();
	}

	public function selectmaxdataby($col,$id)
	{
		$this->db->select_max('id_kritiksaran');
		$this->db->where($col, $id);
		return $this->db->get('kritiksaran')->row();
	}
	
	public function updatedata($data, $id)
	{
		$this->db->where('id_kritiksaran', $id);
		$this->db->update('kritiksaran', $data);
	}

}
