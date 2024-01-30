<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ingredients_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('mst_ingredients');
		if($id != null){
			$this->db->where('ingredients_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params = [
			'ingredients_code' 		=> $post['ingredients_code'],
			'item'  				=> $post['item'],
			'quantity' 				=> $post['quantity'],
			'uom_id' 				=> $post['uom_id'],
			'product_id' 			=> $post['product_id'],
			'description'			=> empty($post['description']) ? null : $post['description'],
		];
		$this->db->insert('mst_ingredients', $params);
	}

	public function edit($post)
	{
		$params = [
			'ingredients_code' 		=> $post['ingredients_code'],
			'item'  				=> $post['item'],
			'quantity' 				=> $post['quantity'],
			'uom_id' 				=> $post['uom_id'],
			'product_id' 			=> $post['product_id'],
			'description'			=> empty($post['description']) ? null : $post['description'],
			'updated' 				=> date('Y-m-d H:i:s')
		];
		$this->db->where('ingredients_id', $post['id']);
		//var_dump($params);die();
		$this->db->update('mst_ingredients', $params);
	}

	public function delete_ingredients($id)
	{

		$this->db->where('ingredients_id', $id);
		$this->db->delete('mst_ingredients');
	}
}
