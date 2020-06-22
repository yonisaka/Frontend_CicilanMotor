<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index()
	{
		$login = $this->session->status;

		if($login == "login"){
			$this->load->view('user/template');
		}else {
			echo "login dulu";
		}
		
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
