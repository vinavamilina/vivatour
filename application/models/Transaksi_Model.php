<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_Model extends CI_Model
{
    function getData($id = null)
    {
        if ($id == null) {
            return $this->db->get('transaksi')->result();
        } else {
            return $this->db->get_where('transaksi', array('id' => $id))->row();
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
