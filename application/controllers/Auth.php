<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        // agar tidak kembali ke page login
        if ($this->session->userdata('user_name')) {
            //  redirect('user');
        }
        $this->form_validation->set_rules('user_name', 'User Name', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login|Siswa';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth_footer');
        } else {
            // validasinya succes
            $this->_login();
        }
    }


    // untuk login
    private function _login()
    {
        $username = $this->input->post('user_name');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['user_name' => $username])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'user_name' => $user['user_name'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);


                    if ($user['role_id'] == 1) {
                        redirect('admin/kepsek');

                    } else if($user['role_id'] == 2) {
                            redirect('admin/admin');
                    }
                    else {

                        redirect('siswa/siswa');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('auth_siswa');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Mohon Maaf Akun Anda Belum di Aktivasi Silahkan Lakukan Pembayaran Pendaftaran Terlebih dahulu!</br>
                INFO AKTIVASI<br>
                Ibu Ozah : 089617652507
                </div>');
                redirect('auth_siswa');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar</div>');
            redirect('auth_siswa');
        }
    }


    // untuk registrasi
    public function registration()
    {
        // agar tidak kembali ke page login

        if ($this->session->userdata('user_name')) {
            // redirect('user');
        }
        $this->form_validation->set_rules('user_name', 'Username', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'Passwword Tidak Sama!',
            'min_length' => 'password to short',
        ]);


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Pendaftaran|Siswa';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'user_name' => htmlspecialchars($this->input->post('user_name', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 0,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akun Anda Berhasil dibuat, Silahkan Lakukan Pembayaran Pendaftaran untuk Aktivasi Login!</br>
            INFO AKTIVASI<br>
            Ibu Ozah : 089617652507
            </div>');
            redirect('auth_siswa');
        }
    }

    // untuk logout
    public function logout()
    {
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Berhasil Keluar!
        </div>');
        redirect('auth');
    }
}
