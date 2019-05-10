<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Cadastro_visitantes extends Ci_Controller {

    private $post;

    public function __construct() {
        parent::__construct();
        $this->valida_logado();
        $this->post = $this->input->post();
        $this->load->model('cadastro_visitantes_model');
    }

    public function index() {

        $data['js'] = array(
            'js/script_visitantes',
        );

        $data['name']       = $this->session->login;

        $data['user_data']  = $this->cadastro_visitantes_model->listar_visitante();

        $this->load->helper('form');

        $this->load->view('head');
        $this->load->view('menu',$data);
        $this->load->view('cadastro_visitantes_view',$data);
        $this->load->view('modal_excluir_visitantes',$data);
        $this->load->view('modal_alterar_visitantes',$data);
        $this->load_modal();
        $this->load->view('footer',$data);

        $data['resposta'] = $this->valida_visitante();

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {

                $this->cadastro_visitantes_model->insere_visitante($this->post);

                 $modal = array(
                        'success' => TRUE,
                        'message' => 'Cadastro Efetuado Com Sucesso',
                        'title' => 'Cadastrado',
                        'class' => 'success'
                        );
                 
                $this->session->set_flashdata('modal', $modal);
                redirect('../cadastro_visitantes', 'redirect');
            }
            
        }
    }

    private function valida_visitante() 
     {
        if (!empty($this->post))
        {
            $this->load->library('form_validation');
            //regras de validação//
            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('cpf', 'CPF', 'required');
            $this->form_validation->set_rules('apartamento_visitado', 'Apartamento Visitado', 'required');

            
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

    public function excluir_visitantes() {
        $this->load_modal();

        if(isset( $this->post['id_usuario'] ) && !empty( $this->post['id_usuario'] )) {

            $delete = $this->cadastro_visitantes_model->deletar_visitante($this->post['id_usuario']);
            

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
                redirect('../cadastro_visitantes', 'redirect');
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
        redirect('../cadastro_visitantes', 'redirect');

        
    }

    public function alterar_visitantes()
    {
        $data['modal_alterar'] = 'modal_open';
        $data['resposta'] = $this->valida_visitante();
        /*carregando a model e passando post*/
        $alterar= $this->cadastro_visitantes_model->alterar_visitante($this->post);
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
            redirect('../cadastro_visitantes', 'redirect');
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