<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('blend_mst_user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null)
	{
		$this->db->from('blend_mst_user');
		if($id != null){
			$this->db->where('user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add_user($post)
	{
		$params['name'] = $post['fullname'];
		$params['username'] = $post['username'];
		$params['password'] = sha1($post['password']);
		$params['level'] = $post['level'];
		$this->db->insert('blend_mst_user', $params);
	}

	public function edit_user($post)
	{
		$params['name'] = $post['fullname'];
		$params['username'] = $post['username'];
		if(!empty($post['password'])) {
			$params['password'] = sha1($post['password']);
		}
		$params['level'] = $post['level'];
		$this->db->where('user_id', $post['user_id']);
		$this->db->update('blend_mst_user', $params);
	}

	public function delete_user($id)
	{

		$this->db->where('user_id', $id);
		$this->db->delete('blend_mst_user');
	}
	

	public function validasi_spv($post)
	{
		$this->db->select('*');
		$this->db->from('blend_mst_user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$this->db->where('level',3);
		$query = $this->db->get();
		return $query;
	}
}
