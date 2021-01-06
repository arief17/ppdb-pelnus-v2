<!-- Begin Page Content -->
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
		<?= $this->session->flashdata('message'); ?>


		<section class="content">


        <section class="content">

            <div class="row mt-4">
                <div class="col-md-12">
					<div class="alert alert-danger" role="alert">
                        <strong>Harap Lengkapi semua Data dengan Benar, Periksa Kembali data yang telah diisi sebelum disimpan</strong>
                    </div>
                </div>
			</div>

			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-link" id="nav-home-tab" data-toggle="tab" href="<?php echo base_url() ?>siswa/kelola_data/data_saya" role="tab" aria-controls="nav-home" aria-selected="true">Data Siswa</a>
					<a class="nav-link active" id="nav-profile-tab" data-toggle="tab" href="<?php echo base_url() ?>siswa/kelola_data/data_ortu" role="tab" aria-controls="nav-profile" aria-selected="false">Data Orang Tua / Wali</a>
					<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="<?php echo base_url() ?>siswa/kelola_data/data_periodik" role="tab" aria-controls="nav-contact" aria-selected="false">Data Periodik</a>
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
							<h6>Data Orang Tua / Ayah Kandung / Ibu Kandung / Wali</h6>
							<form action="<?php echo base_url('siswa/kelola_data/data_ortu/tambah') ?>" method="post" class="mt-3">
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Nama Ayah Kandung</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Tahun Lahir Ayah</label>
									<div class="col-sm-3">
										<input type="number" class="form-control" placeholder="Tahun Lahir" name="tahun_lahir">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
									<div class="col-sm-2">
										<select class="custom-select" id="validationDefault04" required name="berkebutuhan_khusus_ayah">
											<option selected disabled value="">Berkebutuhan Khusus...</option>
											<option>Ya</option>
											<option>Tidak</option>
										</select>
									</div>
									<div class="col-sm-5">
										<input type="password" class="form-control" placeholder="Keterangan Kebutuhan Khusus" name="keterangan_keb_khs_ayah">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan_ayah">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Pendidikan Ayah</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan_ayah">
									</div>
								</div>
								<div class="form-group row mb-5">
									<label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Bulanan Ayah</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Penghasilan Bulanan" name="penghasilan_ayah">
									</div>
								</div>
								<hr>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
									<div class="col-sm-5">
										<input type="password" class="form-control" placeholder="Nama Ibu Kandung" name="nama_ibu">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Tahun Ibu Kandung</label>
									<div class="col-sm-3">
										<input type="number" class="form-control" placeholder="Tahun Lahir Ibu" name="th_lahir_ibu">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
									<div class="col-sm-2">
										<select class="custom-select" id="validationDefault04" required name="berkebutuhan_khusus_ibu">
											<option selected disabled value="">Berkebutuhan Khusus...</option>
											<option>Ya</option>
											<option>Tidak</option>
										</select>
									</div>
									<div class="col-sm-5">
										<input type="password" class="form-control" placeholder="Keterangan Kebutuhan Khusus" name="keterangan_keb_khs_ibu">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Pekerjaan Ibu" name="pekerjaan_ibu">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Pendidikan Ibu</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Pendidikan Ibu" name="pendidikan_ibu">
									</div>
								</div>
								<div class="form-group row mb-5">
									<label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Bulanan Ibu</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Penghasilan Bulanan Ibu" name="penghasilan_ibu">
									</div>
								</div>

								<hr>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Nama Wali</label>
									<div class="col-sm-5">
										<input type="password" class="form-control" placeholder="Nama Wali" name="nama_wali">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan Wali</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Pekerjaan Wali" name="pekerjaan_wali">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Pendidikan Wali</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Pendidikan Wali" name="pendidikan_wali">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Bulanan Wali</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" placeholder="Penghasilan Bulanan Wali" name="penghasilan_wali">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-5">
										<input type="hidden" class=" form-control" name="nisn" value="<?= $user['user_name']; ?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-5">
										<input type="hidden" class=" form-control" name="status" value="1">
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