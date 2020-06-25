<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function landing_page()
	{
		// $this->load->view('layout/master');
		$this->load->library('session');
		$id_admin = $this->session->userdata('id_admin');
		if( $id_admin != null ){
			redirect('admin');
		}else {
			$this->load->view('admin/login');
		}
		
	}

	public function index()
	{
		$this->load->library('session');
		$id_admin = $this->session->userdata('id_admin');
		if( $id_admin != null ){
			$this->load->view('admin/template');
		}else {
			$this->load->view('admin/login');
		}
	}
	
	public function login()
	{
		$this->load->view('admin/login');
	}

	public function registration()
	{
		$this->load->view('admin/registration');
	}
}
