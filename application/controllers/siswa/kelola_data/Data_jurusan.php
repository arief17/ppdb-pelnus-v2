<?php
class Data_jurusan extends CI_Controller
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
        $data['judul'] = 'Data Jurusan';
        $data['siswa'] = $this->m_jurusan->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/data_jurusan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $id                               = $this->input->post('id');
        $nama_jurusan                     = $this->input->post('nama_jurusan');

        $nisn                             = $this->input->post('nisn');
        $status                           = $this->input->post('status');




        $data = array(
            'id'                        => $id,
            'nama_jurusan'              => $nama_jurusan,
            'nisn'                      => $nisn,
            'status'                    => $status





        );

        $this->m_jurusan->input_data($data, 'data_jurusan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil disimpan</div>');


        redirect('siswa/kelola_data/upload_data');
    }
}
