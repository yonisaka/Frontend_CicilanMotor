<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller {

	public function index()
	{
			$konten = $this->load->view('admin/data_motor', null, true);

			$data_json = array(
				'konten' => $konten,
				'titel' => 'Data Motor',
			);

			echo json_encode($data_json);	
	}

	public function form_create()
	{
			$data_view = array('titel' => 'Form Tambah Motor');

			$konten = $this->load->view('admin/form_motor', $data_view, true);

			$data_json = array(
				'konten' => $konten,
				'titel' => 'Form Tambah Motor',
			);

			echo json_encode($data_json);
	}

	public function form_edit($id_motor)
	{
			$data_view = array('titel' => 'Form Edit Data Motor', 'id_motor' => $id_motor);

			$konten = $this->load->view('admin/form_motor', $data_view, true);

			$data_json = array(
				'konten' => $konten,
				'titel' => 'Form Edit Data Motor',
				'id_motor' => $id_motor
			);

			echo json_encode($data_json);
	}
}
