<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ApresentarOs extends Ci_Controller {
    private $post;

    public function __construct(){

        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('gerarOs_model');
    }

    public function index() {

        if(!isset($this->post['id']) && !empty($this->post['id'])){
            $id = $this->post['id'];
        }
        else{
            $id = NULL;
        }

        $data['user_data']  = $this->gerarOs_model->listar_os($id);
        $data['name']       = $this->session->login;

        $this->load->helper('form');

        $this->load->view('head');
        $this->load->view('menu',$data);
        $this->load->view('apresentarOs_view',$data);
        $this->load->view('footer',$data);
    }
}