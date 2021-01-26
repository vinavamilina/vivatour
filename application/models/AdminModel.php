<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{

	function getwisata()
	{

		$query = $this->db->query("SELECT paket_wisata.Id_paket_wisata, paket_wisata.Nama_paket, paket_wisata.Nama_tempat_wisata, paket_wisata.Kegiatan_wisata, paket_wisata.Lama_tour/harga/org
		FROM paket_wisata WHERE Id_paket_wisata = Id_paket_wisata");

		return $query->result();
	}

	function delete($idPaketwisata)
	{

		$query = $this->db->query("delete FROM paket_wisata WHERE id_paket_wisata = " . $idPaketwisata . " ");
	}
}
