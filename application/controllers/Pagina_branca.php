<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina_branca extends CI_Controller {

	public function index(){

		$data['name']	= $this->session->login;

		$data['js'] = array(
			'modal_caller',
			'chart-area-demo',
			'chart-bar-demo',
			'chart-pie-demo'
		);

		$this->load->view('head');
		$this->load->view('menu',$data);
		$this->load->view('paginabranca_view');
		$this->load->view('footer',$data);
	}
}