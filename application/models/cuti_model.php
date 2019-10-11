<?php

class Cuti_model extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('trn_cuti');
        if ($id != null) {
            $this->db->where('nik', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
