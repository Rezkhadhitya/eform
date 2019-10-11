<?php

class Pegawai_model extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('mst_pegawai');
        if ($id != null) {
            $this->db->where('nip', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
