<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paket_Model extends CI_Model
{

    public function countData()
    {
        return $this->db->count_all_results('paket');
    }

    public function getData($id = null)
    {
        $this->db->select('paket.*, paket_kategori.nama as kategori, paket_wisata.nama as wisata');
        $this->db->from('paket');
        $this->db->join('paket_kategori', 'paket.paket_kategori_id = paket_kategori.id');
        $this->db->join('paket_wisata', 'paket.paket_wisata_id = paket_wisata.id');
        if ($id == null) {
            return $this->db->get()->result();
        } else {
            $this->db->where('paket.id = ', $id);
            return $this->db->get()->row();
        }
    }

    public function deleteData($id = null)
    {
        if ($id != null) {
            $query = $this->getData($id);
            if ($query) {
                return $this->db->delete('paket', array('id' => $id));
            }
        }
    }

    public function insertData($data)
    {
        return $this->db->insert('paket', $data);
    }

    public function updateData($id = null, $data = null)
    {
        if ($id != null && $data != null) {
            $this->db->where('id', $id);
            return $this->db->update('paket', $data);
        }
    }
}
