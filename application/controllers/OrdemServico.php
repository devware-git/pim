<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class OrdemServico extends Ci_Controller {
    private $post;

    public function __construct(){

        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('gerarOs_model');
    }

    public function index() {

        if(!$this->post['id']){
            redirect('../dashboard','redirect');       
        }else{
            $id = $this->post['id'];

            $data['user_data']  = $this->gerarOs_model->listar_os($id);
            $data['name']       = $this->session->login;

            $this->load->helper('form');

            $this->load->view('head');
            $this->load->view('menu',$data);
            $this->load->view('ordemServico_view',$data);
            $this->load->view('footer',$data);
        }
    }
}