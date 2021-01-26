<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('beranda', '', true)
			];
			$this->load->view('main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}

	public function beranda()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('beranda', '', true)
			];
			$this->load->view('main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function profilVin()
	{
		if ($this->session->userdata('level_pengguna') == 'admin') {
			$data = [
				'content' => $this->load->view('admin/profilVin', '', true)

			];
			$this->load->view('admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Hubungivin()
	{
		if ($this->session->userdata('level_pengguna') == 'admin') {
			$data = [
				'content' => $this->load->view('admin/Hubungivin', '', true)

			];
			$this->load->view('admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function datapelanggan()
	{
		if ($this->session->userdata('level_pengguna') == 'admin') {
			$data = [
				'content' => $this->load->view('admin/datapelanggan', '', true)

			];
			$this->load->view('admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function datatempatwisata()
	{
		if ($this->session->userdata('level_pengguna') == 'admin') {
			$data = [
				'content' => $this->load->view('admin/datatempatwisata', '', true)

			];
			$this->load->view('admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Tabelpaketwisata()
	{
		if ($this->session->userdata('level_pengguna') == 'admin') {
			$data = [
				'content' => $this->load->view('admin/Tabelpaketwisata', '', true)

			];
			$this->load->view('admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Datapaketpariwisata()
	{
		if ($this->session->userdata('level_pengguna') == 'admin') {
			$data = [
				'content' => $this->load->view('admin/datapaketpariwisata', '', true)

			];
			$this->load->view('admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Transaksi()
	{
		if ($this->session->userdata('level_pengguna') == 'admin') {
			$data = [
				'content' => $this->load->view('admin/Transaksi', '', true)

			];
			$this->load->view('admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function UbahkatasandiVin()
	{
		if ($this->session->userdata('level_pengguna') == 'admin') {
			$data = [
				'content' => $this->load->view('admin/UbahkatasandiVin', '', true)

			];
			$this->load->view('admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
}
