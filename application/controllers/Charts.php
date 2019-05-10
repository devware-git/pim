<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {
	private $post;

	public function index(){

		$data['name']	= $this->session->login;

		$data['js'] = array(
			'js/modal_caller',
			'js/chart-area-demo',
			'js/chart-bar-demo',
			'js/chart-pie-demo'
		);

		$this->load->view('head');
		$this->load->view('menu',$data);
		$this->load->view('charts_view');
		$this->load->view('footer',$data);
	}
}