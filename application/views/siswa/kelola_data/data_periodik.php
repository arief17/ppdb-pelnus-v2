<!-- Begin Page Content -->
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
		<?= $this->session->flashdata('message'); ?>


		<!-- Page Heading -->
		<!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


		<section class="content">

			<div class="row mt-4">
				<div class="col-md-12">
					<div class="alert alert-danger" role="alert">
						<strong>Kolom yang ditandai <span style="color: red;">* Merah</span> wajid diisi. Periksa Kembali data yang telah diisi sebelum dikirim</strong>
					</div>
				</div>
			</div>

			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-link" id="nav-home-tab" data-toggle="tab" href="<?php echo base_url() ?>siswa/kelola_data/data_saya" role="tab" aria-controls="nav-home" aria-selected="true">Data Siswa</a>
					<a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="<?php echo base_url() ?>siswa/kelola_data/data_ortu" role="tab" aria-controls="nav-profile" aria-selected="false">Data Orang Tua / Wali</a>
					<a class="nav-link active" id="nav-contact-tab" data-toggle="tab" href="<?php echo base_url() ?>siswa/kelola_data/data_periodik" role="tab" aria-controls="nav-contact" aria-selected="false">Data Periodik</a>
					<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="<?php echo base_url() ?>siswa/kelola_data/data_prestasi" role="tab" aria-controls="nav-contact" aria-selected="false">Data Prestasi</a>
					<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="<?php echo base_url() ?>siswa/kelola_data/data_jurusan" role="tab" aria-controls="nav-contact" aria-selected="false">Pilihan Kompetensi Keahlian</a>
					<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="<?php echo base_url() ?>siswa/kelola_data/upload_data" role="tab" aria-controls="nav-contact" aria-selected="false">Upload File</a>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
					<!-- isi Content -->
					<div class="card">
						<div class="card-body">
							<h6>Data Periodik</h6>
							<form action="<?php echo base_url('siswa/kelola_data/data_periodik/tambah') ?>" class="mt-3" method="post">
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Tinggi Badan</label>
									<div class="col-sm-2">
										<input type="number" class="form-control" required placeholder="Tinggi Badan" name="tinggi_badan">
									</div>
									<label for="inputPassword" class="col-sm-3 col-form-label">Cm</label>

								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Berat Badan</label>
									<div class="col-sm-2">
										<input type="number" class="form-control" placeholder="Berat Badan" name="berat_badan" required>
									</div>
									<label for="inputPassword" class="col-sm-3 col-form-label">Kg</label>

								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Jarak Tempat Tinggal Ke Sekolah</label>
									<div class="col-sm-2">
										<input type="number" class="form-control" placeholder="Jarak Tempuh" name="jarak_kesekolah" required>
									</div>
									<label for="inputPassword" class="col-sm-3 col-form-label">Km</label>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Waktu Tempuh Berangkat Ke Sekolah</label>
									<div class="col-sm-2">
										<input type="number" class="form-control" placeholder="Jarak Tempuh" required name="waktu_tempuh_kesekolah">
									</div>
									<label for="inputPassword" class="col-sm-3 col-form-label">Km</label>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Jumlah Saudara Kandung</label>
									<div class="col-sm-4">
										<input type="number" class="form-control" placeholder="Jml. Saudara Kandung" required name="jumlah_saudara_kandung">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-4">
										<input type="hidden" class="form-control" name="nisn" value="<?= $user['user_name']; ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-4">
										<input type="hidden" class="form-control" name="status" value="1">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label"></label>
									<div class="col-sm-9">
										<button type="submit" class="btn btn-primary col-sm-4">SIMPAN</button>
									</div>
								</div>

							</form>
						</div>
					</div>

					<!-- akhir Content -->

				</div>
			</div>





			</form>















		</section>
		<!-- section content -->





	</div>
	<!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->