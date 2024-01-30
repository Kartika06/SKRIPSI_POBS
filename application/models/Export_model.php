<?php defined('BASEPATH') OR die('No direct script access allowed');

class Export_model extends CI_Model {

     public function getAll()
     {
          $this->db->select('*');
          $this->db->from('transaction_weighing');
          $this->db->where('batch_no','PD-3348A-1');

          return $this->db->get();
     }

}