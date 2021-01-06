<?php
class Data_prestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        // $this->form_validation->set_rules('nama_lengkap', 'Full Name', 'required|trim');
        // $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Data Prestasi';
        $data['siswa'] = $this->m_prestasi->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/data_prestasi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $jenis_prestasi                   = $this->input->post('jenis_prestasi');
        $tingkat                          = $this->input->post('tingkat');
        $nama_prestasi                    = $this->input->post('nama_prestasi');
        $tahun                            = $this->input->post('tahun');
        $penyelenggara                    = $this->input->post('penyelenggara');
        $nisn                             = $this->input->post('nisn');
        $status                           = $this->input->post('status');




        $data = array(
            'jenis_prestasi'            => $jenis_prestasi,
            'tingkat'                   => $tingkat,
            'nama_prestasi'             => $nama_prestasi,
            'tahun'                     => $tahun,
            'penyelenggara'             => $penyelenggara,
            'nisn'                      => $nisn,
            'status'                    => $status





        );

        $this->m_prestasi->input_data($data, 'data_prestasi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil disimpan</div>');


        redirect('siswa/kelola_data/komptensi_keahlian');
    }
}
