<?php
class Upload_data extends CI_Controller
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
        $data['siswa'] = $this->m_upload->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/upload_data', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $id                   = $this->input->post('id');
        $akta                 = $_FILES['akta_kelahiran'];

        if ($akta = '') {
        } else {
            $config['upload_path'] = './assets_admin/foto/';
            $config['allowed_types'] = 'jpg|png|give|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('akta_kelahiran')) {
                echo "Upload Gagal";
                die();
            } else {
                $akta = $this->upload->data('file_name');
            }
        }

        $kk                 = $_FILES['kartu_keluarga'];

        if ($kk = '') {
        } else {
            $config['upload_path'] = './assets_admin/foto/';
            $config['allowed_types'] = 'jpg|png|give|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('kartu_keluarga')) {
                echo "Upload Gagal";
                die();
            } else {
                $kk = $this->upload->data('file_name');
            }
        }

        $bukti_pembayaran                 = $_FILES['bukti_pembayaran'];
        if ($bukti_pembayaran = '') {
        } else {
            $config['upload_path'] = './assets_admin/foto/';
            $config['allowed_types'] = 'jpg|png|give|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_pembayaran')) {
                echo "Upload Gagal";
                die();
            } else {
                $bukti_pembayaran = $this->upload->data('file_name');
            }
        }


        $pas_foto                 = $_FILES['pas_foto'];
        if ($pas_foto = '') {
        } else {
            $config['upload_path'] = './assets_admin/foto/';
            $config['allowed_types'] = 'jpg|png|give|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('pas_foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $pas_foto = $this->upload->data('file_name');
            }
        }

        $nisn       = $this->input->post('nisn');
        $status     = $this->input->post('status');



        $data = array(
            'id'                        => $id,
            'akta_kelahiran'            => $akta,
            'kartu_keluarga'            => $kk,
            'bukti_pembayaran'          => $bukti_pembayaran,
            'pas_foto'                  => $pas_foto,

            'nisn'                      => $nisn,
            'status'                    => $status





        );

        $this->m_upload->input_data($data, 'upload_data');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil disimpan</div>');


        redirect('siswa/kelola_data/table_status');
    }
}
