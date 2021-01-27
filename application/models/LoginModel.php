<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{

	function cekAkun($user, $pass)
	{

		//$this->db->where('nama_pengguna',$data['nama_pengguna']);
		//$this->db->where('kata_sandi',$data['kata_sandi']);
		//return $this->db->get('pengguna')->row();
		// return md5($pass);
		$query = $this->db->query("SELECT * FROM pengguna WHERE nama_pengguna ='" . $user . "' AND kata_sandi = md5('" . $pass . "')");

		return $query->row();
	}
}
