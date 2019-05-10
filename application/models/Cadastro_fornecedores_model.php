<?php
class Cadastro_fornecedores_model extends CI_Model
{   
    public function listar_fornecedores() 
    {
        
        $query = $this->db->get('fornecedores');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }

    public function insere_fornecedores($post) {

        date_default_timezone_set('America/Sao_Paulo');
        
        $hora_dia   = date('h:i:s');
        $data_dia   = date("d/m/Y");

        $data = array(
            
            'empresa'       => $post['empresa'],
            'cnpj'          => $post['cnpj'],
            'telefone'      => $post['telefone'],
            'responsavel'   => $post['responsavel'],
            'hora'          => $hora_dia,
            'data'          => $data_dia,
            
        );

        if($this->db->insert('fornecedores', $data)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function alterar_fornecedores($post) {

        date_default_timezone_set('America/Sao_Paulo');
        
        $hora_dia   = date('h:i:s');
        $data_dia   = date("d/m/Y");

        $data = array(

            'empresa'       => $post['empresa'],
            'cnpj'          => $post['cnpj'],
            'telefone'      => $post['telefone'],
            'responsavel'   => $post['responsavel'],
            'hora'          => $hora_dia,
            'data'          => $data_dia,

         );
         
         $this->db->where('id',$post['id']);

        if($this->db->update('fornecedores', $data)) 
        {
            return TRUE;
        }
        else
         {
            return FALSE;
         }
    }

    public function deletar_fornecedores($id) {
        $this->db->where('id',$id);

        if ($this->db->delete('fornecedores')) {
            return TRUE;
        }
        else {
            return FALSE;
        }

    }

    public function count() {

        $teste = $this->db->select('count(id) qtd');


        $query = $this->db->get('fornecedores');

        if($query->num_rows() > 0) 
        {
            return $query->result();
        }

        else
         {
            return NULL;
         }
    }
}