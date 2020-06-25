<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	
	public function index()
	{
		$konten = $this->load->view('transaksi/list_transaksi', null, true);

		$data_json = array(
			'konten' => $konten,
			'titel' => 'Transaksi Terbaru',
		);

		echo json_encode($data_json);
    }
}