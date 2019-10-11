<?php

class Invoice_model extends CI_Model
{

    public function get_invoice_barcoding($id = null)
    {
        $this->db->from('trn_invoice');
        if ($id != null) {
            $this->db->where('no_invoice', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_invoice_mybiro($id = null)
    {
        $this->db->from('trn_mybiro');
        if ($id != null) {
            $this->db->where('nomor', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_invoice_msb($id = null)
    {
        $this->db->from('trn_msb');
        if ($id != null) {
            $this->db->where('nomor', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
