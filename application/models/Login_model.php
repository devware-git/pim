<?php
class Login_model extends CI_Model
{   
    public function checar_login($post) 
    {
        
        $this->db->where('login', $post['login']);
        $this->db->where('senha', $post['senha']);
        
        $query = $this->db->get('login');
        if ($query->num_rows() == 1)
        {
            return $query->row();
        }
        else
        {
            return FALSE;
        }
    }

}