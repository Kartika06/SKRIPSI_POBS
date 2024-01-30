<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_qrcode extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->template->load('template', 'master_data/qrcode_data');
	}
}