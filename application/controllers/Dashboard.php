<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $post;

    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
    }
	public function index()
	{
		$this->valida_logado();

		$data['js'] = array(
			'js/modal_caller',
			'js/chart-area-demo',
			'js/chart-bar-demo',
			'js/chart-pie-demo',
		);

		// contando os moradores
		$data['name']	= $this->session->login;

		$this->load->model('cadastro_moradores_model');
		$model 			= $this->cadastro_moradores_model->count();
		$array 			= array_shift($model);
		$data['count_moradores']	= $array;

		// contando os visitantes 
		$this->load->model('cadastro_fornecedores_model');
		$model 			= $this->cadastro_fornecedores_model->count();
		$array 			= array_shift($model);
		$data['count_fornecedores']	= $array;

		// contando os fornecedores
		$this->load->model('cadastro_visitantes_model');
		$model 			= $this->cadastro_visitantes_model->count();
		$array 			= array_shift($model);
		$data['count_visitantes']	= $array;

		// print_r($data['count']);exit;
		
		$this->load->view('head');
		$this->load->view('menu',$data);
		$this->load->view('dashboard_view',$data);
		$this->load_modal();
		$this->load->view('footer',$data);
		$this->load->model('login_model');

	}

	private function valida_logado() {
		$sessao = $this->get_session();
		if ($sessao['logado'] === FALSE) {
			redirect('../login', 'redirect');
		}
	}

	public function get_session(){
            
        $sessao = $this->session->all_userdata();
        if(isset($sessao['logado'])){
            return $sessao;
        }
        return array(
            
            'logado' => FALSE
            
            );
            
    }

    public function load_modal()
    {
        $modal = $this->session->flashdata('modal');
        if(!empty($modal)){
            $data['resposta'] = $modal;
            $this->load->view('modal', $data);
        }
        
    }
}
