<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RandApresentar extends CI_Controller {

	public function index(){

		$data['name']	= $this->session->login;

		$this->load->view('randApresentar_view');
	}
}