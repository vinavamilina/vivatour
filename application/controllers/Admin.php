<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('Admin/beranda', '', true)
			];
			$this->load->view('Admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}

	public function beranda()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('Admin/beranda', '', true)
			];
			$this->load->view('Admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}

	public function profilVin()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('Admin/ProfilVin', '', true)
			];
			$this->load->view('Admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Hubungivin()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('Admin/Hubungivin', '', true)

			];
			$this->load->view('Admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function datapelanggan()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('Admin/datapelanggan', '', true)

			];
			$this->load->view('Admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function datatempatwisata()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('Admin/datatempatwisata', '', true)

			];
			$this->load->view('Admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Tabelpaketwisata()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('Admin/Tabelpaketwisata', '', true)

			];
			$this->load->view('Admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Datapaketpariwisata()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('Admin/datapaketpariwisata', '', true)

			];
			$this->load->view('Admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function Transaksi()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('Admin/Transaksi', '', true)

			];
			$this->load->view('Admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
	public function UbahkatasandiVin()
	{
		if ($this->session->userdata('tipe') == 'Admin') {
			$data = [
				'content' => $this->load->view('Admin/UbahkatasandiVin', '', true)

			];
			$this->load->view('Admin/main', $data);
		} else {
			$this->load->view('error404.php');
		}
	}
}
