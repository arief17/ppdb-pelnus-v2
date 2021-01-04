<?php
class Data_periodik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        // $this->form_validation->set_rules('nama_lengkap', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Daftar';
        $data['siswa'] = $this->m_siswa->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/data_periodik', $data);
        $this->load->view('templates/footer');
    }
}
