<?php
class Cadastro_moradores_model extends CI_Model
{   
    public function listar_morador() 
    {
        
        $query = $this->db->get('moradores');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }

    public function insere_morador($post) {

        date_default_timezone_set('America/Sao_Paulo');
        
        $hora_dia   = date('h:i:s');
        $data_dia   = date("d/m/Y");

        $data = array(
            'nome'          => $post['nome'],
            'sobrenome'     => $post['sobrenome'],
            'apartamento'   => $post['apartamento'],
            'hora'          => $hora_dia,
            'data'          => $data_dia,
        );

        if($this->db->insert('moradores', $data)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function alterar_morador($post) {

        date_default_timezone_set('America/Sao_Paulo');
        
        $hora_dia   = date('h:i:s');
        $data_dia   = date("d/m/Y");

        $data = array(

            'nome'          => $post['nome'],
            'sobrenome'     => $post['sobrenome'],
            'apartamento'   => $post['apartamento'],
            'hora'          => $hora_dia,
            'data'          => $data_dia,

         );
         
         $this->db->where('id',$post['id']);

        if($this->db->update('moradores', $data)) 
        {
            return TRUE;
        }
        else
         {
            return FALSE;
         }
    }

    public function deletar_morador($id) {
        $this->db->where('id',$id);

        if ($this->db->delete('moradores')) {
            return TRUE;
        }
        else {
            return FALSE;
        }

    }

    public function count() {

        $teste = $this->db->select('count(id) qtd');


        $query = $this->db->get('moradores');

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