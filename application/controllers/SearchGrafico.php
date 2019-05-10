<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchGrafico extends CI_Controller {

	private $post; 
    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('rand_model');
    }

	public function index()
	{
        $cliente = NULL;
        $sessao = $this->session->all_userdata();

        $cliente = $this->rand_model->listar_rand();

        print_r(json_encode($cliente));



	}
}
