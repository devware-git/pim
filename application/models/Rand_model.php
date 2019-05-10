<?php
class Rand_model extends CI_Model
{   
    public function listar_rand() 
    {
        
        $query = $this->db->get('rand');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }


    public function update($post) {

        $data = array(

            'val'       => $post['rand'],
         );

        if($this->db->update('rand', $data))
        {
            return TRUE;
        }
        else
         {
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