<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        if (!$this->session->userdata('tipe')) {

            $this->form_validation->set_rules('nama_pengguna', '', 'required', array('required' => 'Nama pengguna harus diisi'));

            $this->form_validation->set_rules('kata_sandi', '', 'required', array('required' => 'Kata sandi harus diisi'));

            if ($this->form_validation->run() == TRUE) {
                $nama_pengguna = $this->input->post('nama_pengguna');
                $kata_sandi = $this->input->post('kata_sandi');

                $hasil = $this->LoginModel->cekAkun($nama_pengguna, $kata_sandi);

                if (!empty($hasil)) {
                    $tipe = $hasil->level_pengguna;
                    $nama = $hasil->nama;
                    $id_pengguna = $hasil->id_pengguna;

                    $data_sesi = [
                        'tipe' => $tipe,
                        'nama' => $nama,
                        'id_pengguna' => $id_pengguna,
                    ];

                    $this->session->set_userdata($data_sesi);

                    // if ($this->session->userdata('level_pengguna') == 'admin') {
                    redirect('admin');
                    // } else {
                    //     echo "Nama pengguna: " . $this->session->userdata('nama') . "<br>";
                    //     echo "ID pengguna: " . $this->session->userdata('id_pengguna') . "<br>";
                    //     echo "level pengguna: " . $this->session->userdata('level_pengguna') . "<br>";
                    // }
                } else {
                    $data = [
                        'info' => 'userpasssalah'
                    ];

                    $this->load->view('Admin/Viva_Tour', $data);
                }
            } else {
                //echo "Nama pengguna atau kata sandi belum diisi";
                $this->load->view('Admin/Viva_Tour');
            }
        } else {
            // if ($this->session->userdata('tipe') == 'Admin') {
            redirect('admin');
            // } else {
            //     echo "Nama pengguna: " . $this->session->userdata('nama') . "<br>";
            //     echo "ID pengguna: " . $this->session->userdata('id_pengguna') . "<br>";
            //     echo "level pengguna: " . $this->session->userdata('tipe') . "<br>";
            // }
        }
    }
}
