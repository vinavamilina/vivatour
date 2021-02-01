<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_Model extends CI_Model
{
    public function countData()
    {
        return $this->db->count_all_results('paket_kategori');
    }

    public function getData($id = null)
    {
        $this->db->select('*');
        $this->db->from('paket_kategori');
        if ($id == null) {
            return $this->db->get()->result();
        } else {
            $this->db->where('paket_kategori.id = ', $id);
            return $this->db->get()->row();
        }
    }

    public function deleteData($id = null)
    {
        if ($id != null) {
            $query = $this->getData($id);
            if ($query) {
                return $this->db->delete('paket_kategori', array('id' => $id));
            }
        }
    }

    public function insertData($data)
    {
        return $this->db->insert('paket_kategori', $data);
    }
}
