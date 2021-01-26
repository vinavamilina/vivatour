<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	function cekAkun($nama_pengguna, $kata_sandi){
    	
    	//$this->db->where('nama_pengguna',$data['nama_pengguna']);
    	//$this->db->where('kata_sandi',$data['kata_sandi']);
    	//return $this->db->get('pengguna')->row();

    	$query = $this->db->query("SELECT * FROM pengguna WHERE nama_pengguna='".$nama_pengguna."' AND kata_sandi = md5('".$kata_sandi."')");

		return $query->row();
	}
    
}

?>
