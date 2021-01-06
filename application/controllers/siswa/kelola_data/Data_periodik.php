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
        // $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Data Periodik';
        $data['siswa'] = $this->m_periodik->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/data_periodik', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $tinggi_badan                     = $this->input->post('tinggi_badan');
        $berat_badan                      = $this->input->post('berat_badan');
        $jarak_kesekolah                  = $this->input->post('jarak_kesekolah');
        $waktu_tempuh_kesekolah           = $this->input->post('waktu_tempuh_kesekolah');
        $jumlah_saudara_kandung           = $this->input->post('jumlah_saudara_kandung');
        $nisn                             = $this->input->post('nisn');
        $status                           = $this->input->post('status');




        $data = array(
            'tinggi_badan'              => $tinggi_badan,
            'berat_badan'               => $berat_badan,
            'jarak_kesekolah'           => $jarak_kesekolah,
            'waktu_tempuh_kesekolah'    => $waktu_tempuh_kesekolah,
            'jumlah_saudara_kandung'    => $jumlah_saudara_kandung,
            'nisn'                      => $nisn,
            'status'                    =>  $status





        );

        $this->m_periodik->input_data($data, 'data_periodik');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil disimpan</div>');


        redirect('siswa/kelola_data/data_prestasi');
    }
}
