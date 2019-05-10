<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class GerarOs extends Ci_Controller {

    private $post;

    public function __construct() {
        parent::__construct();
        $this->valida_logado();
        $this->post = $this->input->post();
        $this->load->model('gerarOs_model');
    }

    public function index() {

        $data['name']	= $this->session->login;

        $this->load->helper('form');

        $this->load->view('head');
        $this->load->view('menu',$data);
        $this->load->view('gerarOs_view',$data);
        $this->load_modal();
        $this->load->view('footer',$data);

        $data['resposta'] = $this->valida_os();

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {

				$this->gerarOs_model->insere_os($this->post);

                 $modal = array(
                        'success' => TRUE,
                        'message' => 'Ordem de Serviço Efetuada Com Sucesso',
                        'title' => 'Cadastrado',
                        'class' => 'success',
                        );
                 
                $this->session->set_flashdata('modal', $modal);
                redirect('../apresentarOs', 'redirect');
            }
            
        }
    }

    private function valida_os() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('cliente', '', 'required');
            $this->form_validation->set_rules('telefone', '', 'required');
            $this->form_validation->set_rules('endereco', '', 'required');
			$this->form_validation->set_rules('bairro', '', 'required');
			$this->form_validation->set_rules('cidade', '', 'required');
			$this->form_validation->set_rules('cpfcnpj', '', 'required');
			$this->form_validation->set_rules('rgie', '', 'required');
			$this->form_validation->set_rules('defeito', '', 'required');
			$this->form_validation->set_rules('servico', '', 'required');
			$this->form_validation->set_rules('garantia', '', 'required');
			$this->form_validation->set_rules('proxrevi', '', 'required');
			$this->form_validation->set_rules('maobra', '', 'required');
			$this->form_validation->set_rules('peca', '', 'required');
			$this->form_validation->set_rules('total', '', 'required');

            
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

    public function excluir_os() {
        $this->load_modal();

        if(isset( $this->post['id_usuario'] ) && !empty( $this->post['id_usuario'] )) {

            $delete = $this->gerarOs_model->deletar_os($this->post['id_usuario']);
            

            if( $delete ) {
                $modal =  array(
                    'success'   => TRUE,
                    'class'     => 'success',
                    'message'   => 'Este Morador Não Está Mais Cadastrado',
                    'title'     => 'Morador Removido Com Sucesso',
                );
            }
            else {
                $modal = array(
                    'success'   => FALSE,
                    'class'     => 'danger',
                    'message'   => 'Não Foi Possivel Remover Esse Morador',
                    'title'     => 'ERROR' ,
                );
            }

            $this->session->set_flashdata('modal', $modal);
                redirect('../gerarOs', 'redirect');
        }
        else {

            $modal = array(
                'success'   => FALSE,
                'class'     => 'danger',
                'message'   => 'Não Detectamos a Função Deletar',
                'title'     => 'ERROR' ,
            );
        }
        $this->session->set_flashdata('modal', $modal);
        redirect('../gerarOs', 'redirect');

        
    }

    public function alterar_os()
    {
        $data['modal_alterar'] = 'modal_open';
        $data['resposta'] = $this->valida_os();
        /*carregando a model e passando post*/
        $alterar= $this->gerarOs_model->alterar_os($this->post);
        if($alterar)
        {
            $modal = array(
                        'success' => TRUE,
                        'message' => 'Alterado com sucesso',
                        'title' => 'Alterado',
                        'class' => 'success'
                        );
        }
        else
        {
            $modal = array( 
                    'success' => FALSE,
                    'message' => 'Erro ao Alterar o usuário, tente novamente!' ,
                    'title' => 'Erro',
                    'class' => 'danger'
                    );
        }
         $this->session->set_flashdata('modal', $modal);
            redirect('../gerarOs', 'redirect');
    }

    public function load_modal()
    {
        $modal = $this->session->flashdata('modal');
        if(!empty($modal)){
            $data['resposta'] = $modal;
            $this->load->view('modal', $data);
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

    public function valida_logado(){
  		
          $sessao = $this->session->all_userdata();
  		if( !isset($sessao['logado']) || $sessao['logado'] == FALSE ){
  			redirect('../login', 'redirect');
          }

  	}
}