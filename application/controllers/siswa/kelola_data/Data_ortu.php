<?php
class Data_ortu extends CI_Controller
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
        $data['judul'] = 'Data Orang Tua';
        $data['data_ortu_wali'] = $this->m_ortu->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/data_ortu', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $nama_ayah          = $this->input->post('nama_ayah');
        $th_lahir           = $this->input->post('tahun_lahir');
        $berkeb_khs         = $this->input->post('berkebutuhan_khusus_ayah');
        $ket                = $this->input->post('keterangan_keb_khs_ayah');
        $pekerjaan          = $this->input->post('pekerjaan_ayah');
        $pendidikan         = $this->input->post('pendidikan_ayah');
        $peng_bulanan       = $this->input->post('penghasilan_ayah');
        $nama_ibu           = $this->input->post('nama_ibu');
        $th_lahir_ibu       = $this->input->post('th_lahir_ibu');
        $berkeb_khs_ibu     = $this->input->post('berkebutuhan_khusus_ibu');
        $ket_keb_ibu        = $this->input->post('keterangan_keb_khs_ibu');
        $pekerjaan_ibu      = $this->input->post('pekerjaan_ibu');
        $pendidikan_ibu     = $this->input->post('pendidikan_ibu');
        $peng_bulanan_ibu   = $this->input->post('penghasilan_ibu');
        $nama_wali          = $this->input->post('nama_wali');
        $pek_wali           = $this->input->post('pekerjaan_wali');
        $pen_wali           = $this->input->post('pendidikan_wali');
        $peng_wali          = $this->input->post('penghasilan_wali');
        $nisn           = $this->input->post('nisn');

        $data = [
            'nama_ayah'                      => $nama_ayah,
            'tahun_lahir'                    => $th_lahir,
            'berkebutuhan_khusus_ayah'       => $berkeb_khs,
            'keterangan_keb_khs_ayah'        => $ket,
            'pekerjaan_ayah'                 => $pekerjaan,
            'pendidikan_ayah'                => $pendidikan,
            'penghasilan_ayah'               => $peng_bulanan,
            'nama_ibu'                      => $nama_ibu,
            'th_lahir_ibu'                    => $th_lahir_ibu,
            'berkebutuhan_khusus_ibu'       => $berkeb_khs_ibu,
            'keterangan_keb_khs_ibu'        => $ket_keb_ibu,
            'pekerjaan_ibu'                 => $pekerjaan_ibu,
            'pendidikan_ibu'                => $pendidikan_ibu,
            'penghasilan_ibu'               => $peng_bulanan_ibu,
            'nama_wali'                     => $nama_wali,
            'pekerjaan_wali'                => $pek_wali,
            'pendidikan_wali'               => $pen_wali,
            'penghasilan_wali'              => $peng_wali,
            'nisn'                           =>  $nisn

        ];
        $this->m_ortu->input_data($data, 'data_ortu_wali');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil disimpan</div>');

        redirect('siswa/kelola_data/data_periodik');
    }
}
