<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_Model extends CI_Model
{
    public function getData($id = null)
    {
        $this->db->select('transaksi.*, paket.nama as paket, pengguna.nama as nama, paket.harga as harga');
        $this->db->from('transaksi');
        $this->db->join('paket', 'paket.id = transaksi.paket_id');
        $this->db->join('pengguna', 'pengguna.id = transaksi.pengguna_id');
        if ($id == null) {
            return $this->db->get()->result();
        } else {
            $this->db->where('paket_wisata.id = ', $id);
            return $this->db->get()->row();
        }
    }

    function deleteData($id = null)
    {
        if ($id != null) {
            $query = $this->getData($id);
            if ($query) {
                return $this->db->delete('transaksi', array('id' => $id));
            }
        }
    }

    function insertData($data)
    {
        return $this->db->insert('transaksi', $data);
    }
}
