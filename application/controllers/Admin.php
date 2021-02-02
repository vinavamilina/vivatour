<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->idData = $this->uri->segment(4);
    }

    public function index()
    {
        redirect('admin/dashboard');
    }

    public function login()
    {
        if (isset($this->session->userdata['username'])) {
            redirect('admin/dashboard');
        }

        $this->form_validation->set_rules('username', 'Nama Pengguna', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Login";
            $this->load->view('auth/login', $data);
        } else {
            //check
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password');

        $user = $this->db->get_where('pengguna', [
            'username' => $username
        ])->row();
        /* check user account */
        if ($user) {
            /* check user password */
            if (MD5($password) == $user->password) {
                $data = [
                    'name' => $user->nama,
                    'username' => $user->username,
                    'level' => $user->hak_akses_id,
                ];
                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            } else {
                /* account wrong password */
                $this->session->set_flashdata('error', 'The password that you\'ve entered is incorrect.');
                redirect('admin/login');
            }
        } else {
            /* account not registred */
            $this->session->set_flashdata('error', 'The email address that you\'ve entered doesn\'t match any account.');
            redirect('admin/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata['name'];
        $this->session->unset_userdata['username'];
        $this->session->unset_userdata['level'];
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'You have been Logged Out !');
        redirect('admin/login');
    }

    public function dashboard()
    {
        is_logged_in();

        switch ($this->session->userdata('level')) {
            case $this->pengguna->accessAdmin()->id:
                $data = [
                    'title' => 'Halaman Utama',
                    'countWisata' => $this->wisata->countData(),
                    'countPaket' => $this->paket->countData(),
                ];
                $this->load->view('templates/header', $data);
                $this->load->view('pages/dashboard/index');
                $this->load->view('templates/footer');
                break;

            default:
                // $this->load->view('error404');
                break;
        }
    }

    public function paket()
    {
        is_logged_in();

        $this->form_validation->set_rules('nama', 'Nama Paket', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori Paket', 'required');
        $this->form_validation->set_rules('wisata', 'Tujuan Wisata', 'required');
        $this->form_validation->set_rules('durasi', 'Lama Tour', 'required');
        $this->form_validation->set_rules('harga', 'Harga Paket', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan Paket', 'required');

        $newData = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'paket_kategori_id' => $this->input->post('kategori', true),
            'paket_wisata_id' => $this->input->post('wisata', true),
            'durasi' => $this->input->post('durasi', true),
            'harga' => $this->input->post('harga', true),
            'keterangan' => $this->input->post('keterangan', true),
        ];

        switch ($this->session->userdata('level')) {
            case $this->pengguna->accessAdmin()->id:
                switch ($this->uri->segment(3)) {
                    case 'create':
                        if ($this->form_validation->run() == FALSE) {
                            $data = [
                                'base' => 'Paket',
                                'title' => 'Tambah Paket Wisata',
                                'heading' => 'Tambah Paket',
                                'kategori' => $this->kategori->getData(),
                                'wisata' => $this->wisata->getData(),
                            ];
                            $this->load->view('templates/header', $data);
                            $this->load->view('pages/paket/create');
                            $this->load->view('templates/footer');
                        } else {
                            $this->paket->insertData($newData);
                            redirect('admin/paket/');
                        }
                        break;
                    case 'show':
                        $data = [
                            'base' => 'Paket',
                            'title' => 'Info Paket Wisata',
                            'heading' => 'Info Paket',
                            'paket' => $this->paket->getData($this->idData),
                        ];
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/paket/show');
                        $this->load->view('templates/footer');
                        break;
                    case 'edit':
                        if ($this->form_validation->run() == FALSE) {
                            $data = [
                                'base' => 'Paket',
                                'title' => 'Edit Paket Wisata',
                                'heading' => 'Edit Paket',
                                'paket' => $this->paket->getData($this->idData),
                                'kategori' => $this->kategori->getData(),
                                'wisata' => $this->wisata->getData(),
                            ];
                            $this->load->view('templates/header', $data);
                            $this->load->view('pages/paket/edit');
                            $this->load->view('templates/footer');
                        } else {
                            $this->paket->updateData($this->idData, $newData);
                            redirect('admin/paket/');
                        }
                        break;
                    case 'delete':
                        $delete = $this->paket->deleteData($this->idData);
                        if ($delete) {
                            redirect('admin/paket');
                        }
                        break;
                    default:
                        $data = [
                            'base' => 'Paket',
                            'title' => 'Table Paket Wisata',
                            'heading' => 'Paket Wisata',
                            'paket' => $this->paket->getData(),
                        ];
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/paket/index');
                        $this->load->view('templates/footer');
                        break;
                }
                break;

            default:
                // $this->load->view('error404');
                break;
        }
    }

    public function wisata()
    {
        is_logged_in();

        switch ($this->session->userdata('level')) {
            case $this->pengguna->accessAdmin()->id:
                switch ($this->uri->segment(3)) {
                    case 'show':
                        $data = [
                            'base' => 'Wisata',
                            'title' => 'Table Tempat Wisata',
                            'heading' => 'Tempat Wisata',
                            'wisata' => $this->wisata->getData($this->idData),
                        ];
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/wisata/show');
                        $this->load->view('templates/footer');
                        break;
                    case 'update':
                        # code...
                        break;
                    case 'edit':
                        # code...
                        break;
                    case 'delete':
                        # code...
                        break;
                    default:
                        $data = [
                            'base' => 'Wisata',
                            'title' => 'Table Tempat Wisata',
                            'heading' => 'Tempat Wisata',
                            'wisata' => $this->wisata->getData(),
                        ];
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/wisata/index');
                        $this->load->view('templates/footer');
                        break;
                }
                break;

            default:
                // $this->load->view('error404');
                break;
        }
    }

    public function kategori()
    {
        is_logged_in();

        switch ($this->session->userdata('level')) {
            case $this->pengguna->accessAdmin()->id:
                switch ($this->uri->segment(3)) {
                    case 'show':
                        # code...
                        break;
                    case 'update':
                        # code...
                        break;
                    case 'delete':
                        # code...
                        break;
                    default:
                        $data = [
                            'base' => 'Kategori',
                            'title' => 'Table Kategori Paket',
                            'heading' => 'Kategori Paket',
                            'kategori' => $this->kategori->getData(),
                        ];
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/kategori/index');
                        $this->load->view('templates/footer');
                        break;
                }
                break;

            default:
                // $this->load->view('error404');
                break;
        }
    }

    public function transaksi()
    {
        is_logged_in();

        switch ($this->session->userdata('level')) {
            case $this->pengguna->accessAdmin()->id:
                switch ($this->uri->segment(3)) {
                    case 'show':
                        # code...
                        break;
                    case 'update':
                        # code...
                        break;
                    case 'delete':
                        # code...
                        break;
                    default:
                        $data = [
                            'base' => 'Transaksi',
                            'title' => 'Table Transaksi Pembayaran',
                            'heading' => 'Transaksi Pembayaran',
                            'transaksi' => $this->transaksi->getData(),
                        ];
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/transaksi/index');
                        $this->load->view('templates/footer');
                        break;
                }
                break;

            default:
                // $this->load->view('error404');
                break;
        }
    }

    public function hubungi_kami()
    {
        is_logged_in();

        switch ($this->session->userdata('level')) {
            case $this->pengguna->accessAdmin()->id:
                switch ($this->uri->segment(3)) {
                    case 'show':
                        # code...
                        break;
                    case 'update':
                        # code...
                        break;
                    case 'delete':
                        # code...
                        break;
                    default:
                        $data = [
                            'title' => 'Hubungi Kami',
                        ];
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/hubungi_kami/index');
                        $this->load->view('templates/footer');
                        break;
                }
                break;

            default:
                // $this->load->view('error404');
                break;
        }
    }
    public function profil()
    {
        is_logged_in();

        switch ($this->session->userdata('level')) {
            case $this->pengguna->accessAdmin()->id:
                switch ($this->uri->segment(3)) {
                    case 'show':
                        # code...
                        break;
                    case 'update':
                        # code...
                        break;
                    case 'delete':
                        # code...
                        break;
                    default:
                        $data = [
                            'title' => 'Profil',
                        ];
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/profil/index');
                        $this->load->view('templates/footer');
                        break;
                }
                break;

            default:
                // $this->load->view('error404');
                break;
        }
    }

    public function pelanggan()
    {
        is_logged_in();

        switch ($this->session->userdata('level')) {
            case $this->pengguna->accessAdmin()->id:
                switch ($this->uri->segment(3)) {
                    case 'show':
                        # code...
                        break;
                    case 'update':
                        # code...
                        break;
                    case 'delete':
                        # code...
                        break;
                    default:
                        $data = [
                            'title' => 'Table Pelanggan',
                            'dataPelanggan' => $this->pengguna->getAllUser(),
                        ];
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/pelanggan/index');
                        $this->load->view('templates/footer');
                        break;
                }
                break;

            default:
                // $this->load->view('error404');
                break;
        }
    }

    public function ubah_sandi()
    {
        is_logged_in();

        switch ($this->session->userdata('level')) {
            case $this->pengguna->accessAdmin()->id:
                switch ($this->uri->segment(3)) {
                    case 'show':
                        # code...
                        break;
                    case 'update':
                        # code...
                        break;
                    case 'delete':
                        # code...
                        break;
                    default:
                        $data = [
                            'title' => 'Ubah Sandi',
                        ];
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/ubah_sandi/index');
                        $this->load->view('templates/footer');
                        break;
                }
                break;

            default:
                // $this->load->view('error404');
                break;
        }
    }
}
