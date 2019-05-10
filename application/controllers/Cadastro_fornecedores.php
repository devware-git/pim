<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Cadastro_fornecedores extends Ci_Controller {

    private $post;

    public function __construct() {
        parent::__construct();
        $this->valida_logado();
        $this->post = $this->input->post();
        $this->load->model('cadastro_fornecedores_model');
    }

    public function index() {

        $data['js'] = array(
            'js/script_fornecedores',
        );

        $data['name']       = $this->session->login;

        $data['user_data']  = $this->cadastro_fornecedores_model->listar_fornecedores();

        $this->load->helper('form');

        $this->load->view('head');
        $this->load->view('menu',$data);
        $this->load->view('cadastro_fornecedores_view',$data);
        $this->load->view('modal_excluir_fornecedores',$data);
        $this->load->view('modal_alterar_fornecedores',$data);
        $this->load_modal();
        $this->load->view('footer',$data);

        $data['resposta'] = $this->valida_fornecedores();

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {

                $this->cadastro_fornecedores_model->insere_fornecedores($this->post);

                 $modal = array(
                        'success' => TRUE,
                        'message' => 'Cadastro Efetuado Com Sucesso',
                        'title' => 'Cadastrado',
                        'class' => 'success',
                        );
                 
                $this->session->set_flashdata('modal', $modal);
                redirect('../cadastro_fornecedores', 'redirect');
            }
            
        }
    }

    private function valida_fornecedores() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('empresa', 'Empresa', 'required');
            $this->form_validation->set_rules('cnpj', 'CNPJ', 'required');
            $this->form_validation->set_rules('telefone', 'Telefone', 'required');
            $this->form_validation->set_rules('responsavel', 'Responsavel', 'required');

            
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

    public function excluir_fornecedores() {
        $this->load_modal();

        if(isset( $this->post['id_usuario'] ) && !empty( $this->post['id_usuario'] )) {

            $delete = $this->cadastro_fornecedores_model->deletar_fornecedores($this->post['id_usuario']);
            

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
                redirect('../cadastro_fornecedores', 'redirect');
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
        redirect('../cadastro_fornecedores', 'redirect');

        
    }

    public function alterar_fornecedores()
    {
        $data['modal_alterar'] = 'modal_open';
        $data['resposta'] = $this->valida_fornecedores();
        /*carregando a model e passando post*/
        $alterar= $this->cadastro_fornecedores_model->alterar_fornecedores($this->post);
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
            redirect('../cadastro_fornecedores', 'redirect');
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