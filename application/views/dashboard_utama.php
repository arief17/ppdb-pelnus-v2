<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashhboard Utama PPDB SMK Pelnus</title>
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.ico">
    <!-- CSS -->
    
    <link rel="stylesheet" href="<?= base_url()?>assets/css/main.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
</head>
<body>
<div class="top-bar">
    
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
            <a class="navbar-brand" href="#">PPDB SMK PELNUS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Aktivasi Pembayaran</a>
            <a class="nav-link btn btn-primary" href="<?php echo base_url()?>auth" style="color:#fff">Login</a>
            </div>
        </div>
</div>
  
</nav>


<div class="isi-content">
    <div class="slider-bg">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo base_url()?>assets/img/slider/pelnus3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url()?>assets/img/slider/pelnus4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url()?>assets/img/slider/pelnus5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    



    <div class="card text-center">
        <div class="card-body content-dev">
            <h5 class="card-title">TELAH DI BUKA PENDAFTARAN GEL - I</h5>
            <p class="card-text">PPDB SMK PELAYARAN NUSANTARA KOTA SERANG</p>
            <a href="<?php echo base_url()?>auth/registration" class="btn btn-primary"><i class="fa fa-send"></i> DAFTAR SEKARANG</a>  
            <a href="<?php echo base_url()?>auth" class="btn btn-success"><i class="fa fa-power-off"></i> LOGIN SEKARANG</a>
        </div>
    </div>
    

    <div class="container mt-3">
        <div class="row box-info">
            <div class="col-xs-6 col-sm col-md box-persyaratan">
                <a href="#" data-toggle="modal" data-target="#alurdaftar">
                    <div class="card persyaratan">
                        <div class="card-header text-center">
                                <h5>ALUR PENDAFTARAN</h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="fa fa-vcard-o"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm col-md box-biaya">
                <a href="#" data-toggle="modal" data-target="#biayadaftar">
                    <div class="card rincian-biaya">
                        <div class="card-header text-center">
                                <h5>RINCIAN BIAYA PENDAFTARAN</h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="fa fa-money"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm col-md box-syarat-daftar">
                <a href="#" data-toggle="modal" data-target="#persyaratanModal">
                    <div class="card syarat-daftar">
                        <div class="card-header text-center">
                                <h5>PERSYARATAN PENDAFTARAN</h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="fa fa-file"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm col-md box-jadwal">
                <a href="#" data-toggle="modal" data-target="#jadwalModal">
                    <div class="card jadwal-daftar">
                        <div class="card-header text-center">
                                <h5>JADWAL PENDAFTARAN</h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm col-md box-contact">
                <a href="#" data-toggle="modal" data-target="#kontakModal">
                    <div class="card contact-person">
                        <div class="card-header text-center">
                                <h5>KONTAK PERSON</h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="fa fa-address-book"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
</div>
    



	<!-- Modal jadwal -->
	<div class="modal fade" id="jadwalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
	<div class="modal-header">
	</div>
	<div class="modal-body modal-jadwal">
		<div class="container">
		<h4>WAKTU PENDAFTARAN</h4><hr>
		<h5>Gelombang I</h5>
		<p>04 Januari - 16 April 2021 - Pendaftaran</p>
		<p>19 April 2021 - Test I (Pilihan)</p>
		<p>22 April 2021 - Test II</p>
		<p>24 April 2021 - Pengumuman Hasil Seleksi</p>
		<p>26 April - 29 April 2021 - Daftar Ulang</p>
		<br>
		<h5>Gelombang II</h5>
		<p>03 Mei - 30 Juni 2021 - Pendaftaran</p>
		<p>03 Juli 2021 - Test</p>
		<p>06 Juli 2021 - Pengumuman Hasil Seleksi</p>
		<p>08 Juli - 10 Juli 2021 - Daftar Ulang</p>
		</div>
		
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
	</div>
	</div>
	</div>
	</div>
	<!-- akhir modal jadwal -->


	<!-- Modal persyaratan -->
	<div class="modal fade" id="persyaratanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
	<div class="modal-header">
	</div>
	<div class="modal-body modal-persyaratan">
		<h4>SYARAT PENDAFTARAN</h4><hr>
		<p>1. Lulusan SMP/MTS</p>
		<p>2. Mengisi Formulir Pendaftaran yang di isi di halaman pendafataran website ppdb</p>
		<p>3. Mengupload PAs Foto 3x4 di halaman pendafataran website ppdb</p>
		<p>4. Mengupload Foto copy Ijasah atau SKHUN yang di legalisir di halaman pendafataran website ppdb</p>
		<p>5. Mengupload Surat Keterangan Sehat dari di DOkoter di halaman pendafataran website ppdb</p>
		<p>6. Mengupload Surat Kelakuan Baik dari Sekolah di halaman pendafataran website ppdb</p>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
	</div>
	</div>
	</div>
	</div>
	<!-- akhir modal persyaratan -->




	<!-- Modal persyaratan -->
	<div class="modal fade" id="kontakModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
	<div class="modal-header">
	</div>
	<div class="modal-body modal-persyaratan">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card" style="width: 18rem;">
				<h4 class="text-center mt-2">KANTOR</h4><hr>
				<div class="card-body">
					<h5 class="text-center">(0254) 7931970</h5>
				</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card" style="width: 18rem;">
				<h4 class="text-center mt-2">BURHANUDIN</h4><hr>
				<div class="card-body">
					<h5 class="text-center">0817708675</h5>
				</div>
				</div>
			</div>

			<div class="col-md-6 mt-4">
				<div class="card" style="width: 18rem;">
				<h4 class="text-center mt-2">MUSTAFA MUCHTAR</h4><hr>
				<div class="card-body">
					<h5 class="text-center">081906261187</h5>
				</div>
				</div>
			</div>
			<div class="col-md-6 mt-4">
				<div class="card" style="width: 18rem;">
				<h4 class="text-center mt-2">SAPROI</h4><hr>
				<div class="card-body">
					<h5 class="text-center">087775689777</h5>
				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
	</div>
	</div>
	</div>
	</div>
	<!-- akhir modal persyaratan -->




	<!-- Modal Alur Daftar -->
	<div class="modal fade" id="alurdaftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg dialog-alur">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">ALUR PENDAFTARAN SISWA BARU</h5>
			</button>
		</div>
		<div class="modal-body">
			
		<!-- isi content alur daftar -->
		<P>1. Lakukan Pendaftaran Akun Siswa di halaman pendaftaran<a href="<?php echo base_url()?>auth/registration"> Klik disini</a></P>
		<p>2. Lakukan Pembayaran Pendaftaran <br>
			&nbsp&nbsp&nbsp&nbsp Nama Bank : BANK BJB<br>
			&nbsp&nbsp&nbsp&nbsp No. Rekening   : 0069157068101 <br>
			&nbsp&nbsp&nbsp&nbsp Nama Bank : BANK BRI<br>
		    &nbsp&nbsp&nbsp&nbsp No. Rekening   : 083301032237535 <br>
		    &nbsp&nbsp&nbsp&nbsp Atas Nama   : SMK PELAYARAN NUSANTARA <br>
		</p>
		 <h5>&nbsp&nbsp&nbsp Biaya Pendaftaran Rp. 120.000</h5>
		<p>3. Lakukan Konfirmasi Pembayaran agar bisa Login</p>
		<p>4. Login Ke Aplikasi Untuk Melengkapi Data Pendaftaran</p>
		<p>5. Cetak Bukti Pendaftaran</p>


		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
		</div>
		</div>
	</div>
	</div>
	<!-- akhir modal alur daftar -->



	<!-- Modal biaya daftar -->
	<div class="modal fade" id="biayadaftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg dialog-alur">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">RINCIAN BIAYA PENDAFTARAN</h5>
						</button>
					</div>
					<div class="modal-body">

						<!-- isi content biaya daftar -->
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Biaya Administrasi</th>
									<th scope="col">Jumlah</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Biaya Seragam dan Perlengkapan Sekolah</td>
									<td>Rp. 3. 600.000</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Biaya Pengembangan Pendidikan</td>
									<td>Rp. 1. 500.000</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Biaya SPP Bulan Juli 2020</td>
									<td>Rp. 250.000</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Biaya Ujian Semester Ganjil & Ganjil</td>
									<td>Rp. 600.000</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Biaya Asuransi Kecelakaan Satu Tahun</td>
									<td>Rp. 30.000</td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Biaya Kegiatan Taruna</td>
									<td>Rp. 1000.000</td>
								</tr>
								<tr>
									<th scope="row"></th>
									<th scope="col">Jumlah</th>
									<th scope="col">Rp. 6.980.000</th>
								</tr>
							</tbody>
						</table>

						<!-- akhir isi biaya daftar -->

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradaftar" data-dismiss="modal"><i class="fa fa-paper-plane"></i>&nbsp Cara Pembayaran</button>
					</div>
				</div>
			</div>
		</div>
		<!-- akhir modal biaya daftar -->


		<!-- Modal biaya daftar -->
		<div class="modal fade" id="caradaftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg dialog-alur">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">CARA PEMBAYARAN</h5>
						</button>
					</div>
					<div class="modal-body">

						<!-- isi content biaya daftar -->
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Biaya Administrasi</th>
									<th scope="col">Jumlah</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Angsuran I dibayar saat pendaftaran</td>
									<td>Rp. 3. 500.000</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Angsuran II dibayar 23 September 2020</td>
									<td>Rp. 1. 600.000</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Angsuran III dibayar 23 Desember 2020</td>
									<td>Rp. 1. 000.000</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Angsuran IV dibayar 20 Februari 2021</td>
									<td>Rp. 830.000</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>SPP Agustus 2020 s/d Juni 2021 dibayar setiap bulan paling lambat s/d tanggal 10</td>
									<td>Rp. 250.000 / Bulan</td>
								</tr>
							</tbody>
						</table>

						<!-- akhir isu biaya daftar -->

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-window-close"></i>&nbsp Tutup</button>
					</div>
				</div>
			</div>
		</div>
		<!-- akhir modal biaya daftar -->
        


    <!-- JS AND JQUERY -->
    
    <!-- JS dan JQUERY -->
		<script src="<?php echo base_url() ?>assets/js/jquery-3.5.1.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
