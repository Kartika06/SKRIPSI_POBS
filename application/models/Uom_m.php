<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uom_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('mst_uom');
		if($id != null){
			$this->db->where('uom_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params = [
			'uom_name'  => $post['uom_name'],
			'description'	=> empty($post['description']) ? null : $post['description'],
		];
		$this->db->insert('mst_uom', $params);
	}

	public function edit($post)
	{
		$params = [
			'uom_name'  => $post['uom_name'],
			'description'	=> empty($post['description']) ? null : $post['description'],
			'updated' 		=> date('Y-m-d H:i:s')
		];
		$this->db->where('uom_id', $post['id']);
		$this->db->update('mst_uom', $params);
	}

	public function delete_uom($id)
	{

		$this->db->where('uom_id', $id);
		$this->db->delete('mst_uom');
	}
}
