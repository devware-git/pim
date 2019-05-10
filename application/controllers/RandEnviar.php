<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RandEnviar extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('rand_model');
    }

	public function index(){

        $data['js'] = array(
            'js/rand',
            'js/grafico'
        );

		$this->load->helper('form');
		$data['name']	= $this->session->login;

		$data['val_rand'] = $this->rand_model->listar_rand();

		$this->load->view('head',$data);
		$this->load->view('menu',$data);
		$this->load->view('rand_view',$data);
		$this->load->view('footer',$data);

		$data['resposta'] = $this->valida_rand();

		if(!empty( $data['resposta'])){
			if($data['resposta'] === TRUE){
				
                $this->rand_model->update($this->post);

			}

		}
	}

	private function valida_rand() 
    {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('rand', '', 'required');

            
            //configurando erro ou sucesso//
            if ($this->form_validation->run() === FALSE) 
            {
                return array(
                    'class' => 'danger',
                    'message' => validation_errors() ,
                    'title' => 'Erro Ao Enviar'
                );
            }
            else
            {
                return true;
            }
        }
        return NULL;
    }
}