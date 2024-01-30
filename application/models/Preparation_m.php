<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class preparation_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('mst_preparation');
		if($id != null){
			$this->db->where('preparation_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params = [
			'art_code' 		=> $post['art_code'],
			'preparation_name'  => $post['preparation_name'],
			'abbreviation' 	=> $post['abbreviation'],
			'prinsipal' 	=> $post['prinsipal'],
			'batchsize' 	=> $post['batchsize'],
			'description'	=> empty($post['description']) ? null : $post['description'],
		];
		$this->db->insert('mst_preparation', $params);
	}

	public function edit($post)
	{
		$params = [
			'art_code' 			=> $post['art_code'],
			'preparation_name'  => $post['preparation_name'],
			'abbreviation' 		=> $post['abbreviation'],
			'prinsipal' 		=> $post['prinsipal'],
			'batchsize' 		=> $post['batchsize'],
			'description'		=> empty($post['description']) ? null : $post['description'],
			'updated' 			=> date('Y-m-d H:i:s')
		];
		$this->db->where('preparation_id', $post['id']);
		$this->db->update('mst_preparation', $params);
	}

	public function delete_user($id)
	{

		$this->db->where('preparation_id', $id);
		$this->db->delete('mst_preparation');
	}
}
