<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('user/template');
	}

	public function akun()
	{
		$konten = $this->load->view('user/akun', null, true);

		$data_json = array(
			'konten' => $konten,
			'titel' => 'User Profile',
		);

		echo json_encode($data_json);
	}

	public function angsuran()
	{
		$konten = $this->load->view('user/angsuran', null, true);

		$data_json = array(
			'konten' => $konten,
			'titel' => 'Angsuran Motor',
		);

		echo json_encode($data_json);
	}
}
