<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{

	function getAllPaketWisata()
	{

		$query = $this->db->query("SELECT * FROM paket_wisata");

		return $query->result();
	}

	function getPaketWisata($data)
	{
		$query = $this->db->query("SELECT * FROM paket_wisata WHERE Id_paket_wisata = '$data'");
		return $query->row();
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

	public function createPaketWisata($no, $nama, $paket, $kegitan, $tour)
	{
		return $this->db->query("INSERT INTO `paket_wisata` (`Id_paket_wisata`, `Nama_paket`, `Nama_tempat_wisata`, `Kegiatan_wisata`, `lama_tour`) VALUES ('$no', '$nama', '$paket', '$kegitan', '$tour')");
	}

	function delete($idPaketwisata)
	{

		$query = $this->db->query("delete FROM paket_wisata WHERE id_paket_wisata = " . $idPaketwisata . " ");
	}
}
