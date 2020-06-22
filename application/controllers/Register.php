<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function registration()
    {
        $this->load->view('customer/registration');
    }
    
}
