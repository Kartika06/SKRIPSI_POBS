<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function index()
	{
		$this->template->load('template', 'operator/operator_data');
	}
}
