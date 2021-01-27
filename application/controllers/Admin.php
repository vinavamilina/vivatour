<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				// 'content' => $this->load->view('Admin/beranda', '', true)
			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/beranda');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}

	public function beranda()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				// 'content' => $this->load->view('Admin/beranda', '', true)
			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/beranda');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}

	public function profilVin()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				// 'content' => $this->load->view('Admin/ProfilVin', '', true)
			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/ProfilVin');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Hubungivin()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				// 'content' => $this->load->view('Admin/Hubungivin', '', true)

			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/Hubungivin');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}
	public function datapelanggan()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				// 'content' => $this->load->view('Admin/datapelanggan', '', true)

			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/datapelanggan');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}
	public function datatempatwisata()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				// 'content' => $this->load->view('Admin/datatempatwisata', '', true)
			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/datatempatwisata');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Datapaketpariwisata()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				// 'content' => $this->load->view('Admin/datapaketpariwisata', '', true)
			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/datapaketpariwisata');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Transaksi()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				// 'content' => $this->load->view('Admin/Transaksi', '', true)

			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/Transaksi');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}
	public function UbahkatasandiVin()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				// 'content' => $this->load->view('Admin/UbahkatasandiVin', '', true)
			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/UbahkatasandiVin');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}

	public function hapusPaket($data)
	{
		$delete = $this->AdminModel->deletePaketWisata($data);
		if ($delete) {
			redirect('admin/tabledatawisata');
		}
	}

	public function adddatawisata()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$this->load->view('templates/header');
			$this->load->view('Admin/wisata/create');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}

	public function detaildatawisata($id)
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'data' => $this->AdminModel->getPaketWisata($id),
			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/wisata/info');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}

	public function editdatawisata($id)
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'data' => $this->AdminModel->getPaketWisata($id),
			];
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/wisata/edit');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}

	public function createdatawisata()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$no = htmlspecialchars($this->input->post('no', true));
			$nama = htmlspecialchars($this->input->post('nama', true));
			$paket = htmlspecialchars($this->input->post('paket', true));
			$kegiatan = htmlspecialchars($this->input->post('kegiatan', true));
			$tour = htmlspecialchars($this->input->post('tour', true));
			$data = [
				'Id_paket_wisata' => $no,
				'Nama_paket' => $nama,
				'Nama_tempat_wisata' => $paket,
				'Kegiatan_wisata' => $kegiatan,
				'lama_tour' => $tour,
			];
			$save = $this->db->insert('paket_wisata', $data);
			if ($save) {
				redirect('admin/tabledatawisata');
			}
		}
	}
	public function updatedatawisata()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$no = htmlspecialchars($this->input->post('no', true));
			$nama = htmlspecialchars($this->input->post('nama', true));
			$paket = htmlspecialchars($this->input->post('paket', true));
			$kegiatan = htmlspecialchars($this->input->post('kegiatan', true));
			$tour = htmlspecialchars($this->input->post('tour', true));
			$data = [
				'Nama_paket' => $nama,
				'Nama_tempat_wisata' => $paket,
				'Kegiatan_wisata' => $kegiatan,
				'lama_tour' => $tour,
			];
			$this->db->where('Id_paket_wisata', $no);
			$this->db->update('paket_wisata', $data);
			redirect('admin/tabledatawisata');
		}
	}

	public function tabledatawisata()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'Wisata' => $this->AdminModel->getAllPaketWisata(),
			];
			// var_dump($data);
			$this->load->view('templates/header', $data);
			$this->load->view('Admin/wisata/table');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('error404.php');
		}
	}
}
