<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


        <section class="content">

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <strong>Kolom yang ditandai <span style="color: red;">* Merah</span>	 wajid diisi. Periksa Kembali data yang telah diisi sebelum dikirim</strong>
                    </div>
                </div>
			</div>
			
			<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-link" id="nav-home-tab" data-toggle="tab" href="<?php echo base_url()?>siswa/kelola_data/data_saya" role="tab" aria-controls="nav-home" aria-selected="true">Data Siswa</a>
				<a class="nav-link active" id="nav-profile-tab" data-toggle="tab" href="<?php echo base_url()?>siswa/kelola_data/data_ortu" role="tab" aria-controls="nav-profile" aria-selected="false">Data Orang Tua / Wali</a>
				<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="<?php echo base_url()?>siswa/kelola_data/data_periodik" role="tab" aria-controls="nav-contact" aria-selected="false">Data Periodik</a>
				<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Data Prestasi</a>
				<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Pilihan Kompetensi Keahlian</a>
			</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
					<!-- isi Content -->
					<div class="card">
					<div class="card-body">
						<h6>Data Orang Tua / Ayah Kandung / Ibu Kandung / Wali</h6>
						<form action="#" class="mt-3">
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Nama Ayah Kandung</label>
								<div class="col-sm-5">
								<input type="password" class="form-control" placeholder="Nama Ayah">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Tahun Lahir Ayah</label>
								<div class="col-sm-3">
								<input type="number" class="form-control" placeholder="Tahun Lahir">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
								<div class="col-sm-2">
									<select class="custom-select" id="validationDefault04" required>
										<option selected disabled value="">Berkebutuhan Khusus...</option>
										<option>Ya</option>
										<option>Tidak</option>
									</select>
								</div>
								<div class="col-sm-5">
								<input type="password" class="form-control" placeholder="Keterangan Kebutuhan Khusus">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Pekerjaan">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Pendidikan Ayah</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Pendidikan">
								</div>
							</div>
							<div class="form-group row mb-5">
								<label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Bulanan Ayah</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Penghasilan Bulanan">
								</div>
							</div>
							<hr>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
								<div class="col-sm-5">
								<input type="password" class="form-control" placeholder="Nama Ibu Kandung">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Tahun Ibu Kandung</label>
								<div class="col-sm-3">
								<input type="number" class="form-control" placeholder="Tahun Lahir Ibu">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
								<div class="col-sm-2">
									<select class="custom-select" id="validationDefault04" required>
										<option selected disabled value="">Berkebutuhan Khusus...</option>
										<option>Ya</option>
										<option>Tidak</option>
									</select>
								</div>
								<div class="col-sm-5">
								<input type="password" class="form-control" placeholder="Keterangan Kebutuhan Khusus">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Pekerjaan Ibu">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Pendidikan Ibu</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Pendidikan Ibu">
								</div>
							</div>
							<div class="form-group row mb-5">
								<label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Bulanan Ibu</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Penghasilan Bulanan Ibu">
								</div>
							</div>

							<hr>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Nama Wali</label>
								<div class="col-sm-5">
								<input type="password" class="form-control" placeholder="Nama Wali">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan Wali</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Pekerjaan Wali">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Pendidikan Wali</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Pendidikan Wali">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Bulanan Wali</label>
								<div class="col-sm-5">
								<input type="text" class="form-control" placeholder="Penghasilan Bulanan Wali">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label"></label>
								<div class="col-sm-9">
								<a href="#" class="btn btn-primary col-sm-4">SIMPAN</a>
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
