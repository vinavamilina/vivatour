<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{

	function getAllPaketWisata()
	{

		$query = $this->db->query("SELECT * FROM paket_wisata");

		return $query->result();
	}

	function deletePaketWisata($data)
	{
		if ($data) {
			$query = $this->db->query("SELECT * FROM paket_wisata WHERE Id_paket_wisata = '$data'");
			if ($query) {
				return $this->db->query("DELETE FROM paket_wisata WHERE Id_paket_wisata = '$data'");
			}
		}
	}

	function delete($idPaketwisata)
	{

		$query = $this->db->query("delete FROM paket_wisata WHERE id_paket_wisata = " . $idPaketwisata . " ");
	}
}
