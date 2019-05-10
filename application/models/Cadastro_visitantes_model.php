<?php
class Cadastro_visitantes_model extends CI_Model
{   
    public function listar_visitante() 
    {
        
        $query = $this->db->get('visitantes');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }

    public function insere_visitante($post) {

        date_default_timezone_set('America/Sao_Paulo');
        
        $hora_dia   = date('H:i:s');
        $data_dia   = date("d/m/Y");

        $data = array(
            'nome'                  => $post['nome'],
            'cpf'                   => $post['cpf'],
            'apartamento_visitado'  => $post['apartamento_visitado'],
            'hora'                  => $hora_dia,
            'data'                  => $data_dia,


        );

        if($this->db->insert('visitantes', $data)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function alterar_visitante($post) {

        date_default_timezone_set('America/Sao_Paulo');

        $hora_dia   = date('H:i:s');
        $data_dia   = date("d/m/Y");

        $data = array(

            'nome'                  => $post['nome'],
            'cpf'                   => $post['cpf'],
            'apartamento_visitado'  => $post['apartamento_visitado'],
            'hora'                  => $hora_dia,
            'data'                  => $data_dia,

         );
         
         $this->db->where('id',$post['id']);

        if($this->db->update('visitantes', $data)) 
        {
            return TRUE;
        }
        else
         {
            return FALSE;
         }
    }

    public function deletar_visitante($id) {
        $this->db->where('id',$id);

        if ($this->db->delete('visitantes')) {
            return TRUE;
        }
        else {
            return FALSE;
        }

    }

    public function count() {

        $teste = $this->db->select('count(id) qtd');


        $query = $this->db->get('visitantes');

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