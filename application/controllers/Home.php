<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home/index');
	}

	public function detail($id_motor)
	{
		$data_view = array('id_motor' => $id_motor);

		$konten = $this->load->view('home/detail', $data_view, true);

		$data_json = array(
			'konten' => $konten,
			'id_motor' => $id_motor
		);

		echo json_encode($data_json);
	}

	public function pembelian($id_motor)
	{
		$this->load->library('session');
		$login = $this->session->status;
		$data_view = array('id_motor' => $id_motor);

		if($login == 'login'){
			$konten = $this->load->view('home/pembelian', $data_view, true);

			$data_json = array(
				'konten' => $konten,
				'id_motor' => $id_motor
			);

			echo json_encode($data_json);
		}else {
			echo json_encode("belum login");
		}
	}
  
  public function setSession()
  {
    $this->load->library('session');
    
    $id_admin = $this->input->post('id_admin');
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');

		$this->session->set_userdata('id_admin', $id_admin);
		$this->session->set_userdata('email', $email);
		$this->session->set_userdata('nama', $nama);
  }
	public function pembayaran($id_customer)
	{
		$data_view = array('id_customer' => $id_customer);
		$konten = $this->load->view('home/pembayaran', $data_view, true);

		$data_json = array(
			'konten' => $konten,
			'id_customer' => $id_customer
		);

		echo json_encode($data_json);
	}
}
