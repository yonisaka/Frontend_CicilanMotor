<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index()
	{
			$konten = $this->load->view('customer/data_customer', null, true);

			$data_json = array(
				'konten' => $konten,
				'titel' => 'Data Customer',
			);

			echo json_encode($data_json);	
	}

	public function form_create()
	{
			$data_view = array('titel' => 'Form Tambah Customer');

			$konten = $this->load->view('customer/form_customer', $data_view, true);

			$data_json = array(
				'konten' => $konten,
				'titel' => 'Form Tambah Customer',
			);

			echo json_encode($data_json);
	}

	public function form_edit($id_customer)
	{
			$data_view = array('titel' => 'Form Edit Data Customer', 'id_customer' => $id_customer);

			$konten = $this->load->view('customer/form_customer', $data_view, true);

			$data_json = array(
				'konten' => $konten,
				'titel' => 'Form Edit Data Customer',
				'id_customer' => $id_customer
			);

			echo json_encode($data_json);
	}
}