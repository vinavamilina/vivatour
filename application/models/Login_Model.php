<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_Model extends CI_Model
{
    public function cek($user = null, $pass = null)
    {
        if ($user != null && $pass != null) {
            return $this->db->get('pengguna', array('username' => $user, 'password' => MD5('$pass')))->row();
        }
    }

    function cekAkun($user, $pass)
    {
        $query = $this->db->query("SELECT * FROM pengguna WHERE nama_pengguna ='" . $user . "' AND kata_sandi = md5('" . $pass . "')");

        return $query->row();
    }
}
