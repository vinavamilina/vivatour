<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_Model extends CI_Model
{
    public function getData($id = null)
    {
        if ($id == null) {
            return $this->db->get('pengguna')->result();
        } else {
            return $this->db->get_where('pengguna', array('id' => $id))->row();
        }
    }

    public function deleteData($id = null)
    {
        if ($id != null) {
            $query = $this->getData($id);
            if ($query) {
                return $this->db->delete('pengguna', array('id' => $id));
            }
        }
    }

    public function insertData($data)
    {
        return $this->db->insert('pengguna', $data);
    }


    public function checkLogin($user = null, $pass = null)
    {
        if ($user != null && $pass != null) {
            return $this->db->get('pengguna', array('username' => $user, 'password' => MD5($pass)))->row();
        }
    }

    public function accessAdmin()
    {
        return $this->db->get_where('hak_akses', array('nama' => 'Admin'))->row();
    }

    public function accessUser()
    {
        return $this->db->get_where('hak_akses', array('nama' => 'Pelanggan'))->row();
    }

    public function getAllUser()
    {
        $this->db->select('pengguna.*, hak_akses.nama as level');
        $this->db->from('pengguna');
        $this->db->join('hak_akses', 'pengguna.hak_akses_id = hak_akses.id');
        $this->db->where('hak_akses.nama', 'Pelanggan');
        return $this->db->get()->result();
    }
}
