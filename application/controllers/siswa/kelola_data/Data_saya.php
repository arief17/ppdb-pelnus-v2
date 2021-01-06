<?php
class Data_saya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        // $this->form_validation->set_rules('nama_lengkap', 'Full Name', 'required|trim');
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Daftar';
        $data['siswa'] = $this->m_siswa->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/data_saya', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $nama                   = $this->input->post('nama_lengkap');
        $jenis_kelamin          = $this->input->post('jenis_kelamin');
        $nisn                   = $this->input->post('nisn');
        $nis                    = $this->input->post('nis');
        $no_ijazah_smp          = $this->input->post('no_seri_ijazah_smp');
        $no_shun                = $this->input->post('no_seri_shun');
        $no_un_smpmts           = $this->input->post('no_un_smp_mts');
        $nik                    = $this->input->post('nik_siswa');
        $tm_lahir               = $this->input->post('tmp_lahir');
        $tgl_lahir              = $this->input->post('tgl_lahir');
        $agama                  = $this->input->post('agama');
        $keb_khusus             = $this->input->post('berkebutuhan_khusus');
        $dusun                  = $this->input->post('dusun');
        $rt_rw                  = $this->input->post('rt_rw');
        $kel_des                = $this->input->post('kelurahan_desa');
        $kec                    = $this->input->post('kecamatan');
        $kab_kot                = $this->input->post('kabupaten_kota');
        $prov                   = $this->input->post('provinsi');
        $alat_transport         = $this->input->post('alat_transportasi');
        $jenis_tinggal          = $this->input->post('jenis_tinggal');
        $no_telp                = $this->input->post('no_telp_rumah');
        $no_hp                  = $this->input->post('no_hp');
        $email                  = $this->input->post('email');
        $kps                    = $this->input->post('penerima_kps');
        $nokps                  = $this->input->post('no_kps');
        $status                 = $this->input->post('status');



        $data = array(

            'nama_lengkap'              => $nama,
            'jenis_kelamin'             => $jenis_kelamin,
            'nisn'                      => $nisn,
            'nis'                       => $nis,
            'no_seri_ijazah_smp'        => $no_ijazah_smp,
            'no_seri_shun'              => $no_shun,
            'no_un_smp_mts'             => $no_un_smpmts,
            'nik_siswa'                 => $nik,
            'tmp_lahir'                 => $tm_lahir,
            'tgl_lahir'                 => $tgl_lahir,
            'agama'                     => $agama,
            'berkebutuhan_khusus'       => $keb_khusus,
            'dusun'                     => $dusun,
            'rt_rw'                     => $rt_rw,
            'kelurahan_desa'            => $kel_des,
            'kecamatan'                 => $kec,
            'kabupaten_kota'            => $kab_kot,
            'provinsi'                  => $prov,
            'alat_transportasi'         => $alat_transport,
            'jenis_tinggal'             => $jenis_tinggal,
            'no_telp_rumah'             => $no_telp,
            'no_hp'                     => $no_hp,
            'email'                     => $email,
            'penerima_kps'              => $kps,
            'no_kps'                    => $nokps,
            'status'                      => $status




        );

        $this->m_siswa->input_data($data, 'siswa');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil disimpan</div>');


        redirect('siswa/kelola_data/data_ortu');
    }
}
