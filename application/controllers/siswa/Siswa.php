<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Halaman Siswa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/dashboard_siswa', $data);
        $this->load->view('templates/footer');
    }
}
