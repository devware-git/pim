<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AvisoSindico extends CI_Controller {
	private $post;

	public function index(){

		$data['name']	= $this->session->login;

		$this->load->view('head');
		$this->load->view('menu',$data);
		$this->load->view('avisoSindico_view');
		$this->load->view('footer',$data);
	}
}