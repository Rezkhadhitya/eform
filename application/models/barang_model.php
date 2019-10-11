<?php

class Barang_model extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('mst_barang');
        if ($id != null) {
            $this->db->where('kode_barang', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
