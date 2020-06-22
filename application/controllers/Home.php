<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home/index');
	}

	public function setSession()
	{
		$this->load->library('session');

		$id_customer = $this->input->post('id_customer');
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');

		$this->session->set_userdata('id_customer', $id_customer);
		$this->session->set_userdata('email', $email);
		$this->session->set_userdata('nama', $nama);
	}

	public function detail()
	{
		$this->load->view('home/detail');
	}
}
