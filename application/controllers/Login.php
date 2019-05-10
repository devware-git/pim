<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    private $post;

    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('login_model');
    }

    public function index() 
    {
        $data ['js'] = array(
            'modal_caller',
            'validacao'
        );

        $data['sessao'] =  $this->get_session();

        $this->load->helper('form');
        $data['resposta'] = $this->validar_login();
        $this->load->view('head', $data);
        $this->load_modal();
        $this->load->view('login_view', $data);
    }
    public function validar_login() 
    {
        if (!empty($this->post)) 
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('login', '', 'required');
            $this->form_validation->set_rules('senha', '', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                return array(
                    'success'   => FALSE,
                    'class'     => 'danger',
                    'message'   => validation_errors("<span>", "</span>") ,
                    'title'     => 'Erro Ao Enviar'
                );
            }
            else
            { 
                $user = $this->login_model->checar_login($this->post);
                
                if ($user !== FALSE) 
                {
                    $sessao = array(
                        'id_usuario'    => $user->id, 
                        'login'         => $user->login,
                        'logado'        => TRUE
                    );
                    $this->session->set_userdata($sessao);
                    
                    $modal = array(
                        'success'   => TRUE,
                        'message'   => 'Bem vindo '.$user->login.' ao seu painel administrativo',
                        'title'     => 'Sucesso',
                        'class'     => 'success'
                        );
            
                    $this->session->set_flashdata('modal', $modal);
                    redirect('../dashboard', 'redirect');
                }
                else
                {
                    $modal =  array(
                        'success'   => FALSE,
                        'class'     => 'danger',
                        'message'   => 'login ou senha invalida',
                        'title'     => 'Erro ao conectar'
                    );
                    $this->session->set_flashdata('modal', $modal);
                     redirect('../login', 'redirect');
                }
            }
        }
    }
    
    public function load_modal()
    {
        $modal = $this->session->flashdata('modal');
        if(!empty($modal)){
            $data['resposta'] = $modal;
            $this->load->view('modal', $data);
        }
        
    }
    public function sair()
    {
         $this->session->sess_destroy();
         
         redirect('login/set_logout_msg');
    }
    
    public function set_logout_msg()
    {
        $modal =  array(
                        'success'   => TRUE,
                        'class'     => 'success',
                        'message'   => 'sessão finalizada',
                        'title'     => 'saiu'
                    );

        $this->session->set_flashdata('modal', $modal);
         redirect('../login', 'redirect');
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

}
?>