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
                        <strong>Harap Lengkapi semua Data dengan Benar, Periksa Kembali data yang telah diisi sebelum disimpan</strong>
                    </div>
                </div>
			</div>
			
			<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-link" id="nav-home-tab" data-toggle="tab" href="<?php echo base_url()?>siswa/kelola_data/data_saya" role="tab" aria-controls="nav-home" aria-selected="true">Data Siswa</a>
				<a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="<?php echo base_url()?>siswa/kelola_data/data_ortu" role="tab" aria-controls="nav-profile" aria-selected="false">Data Orang Tua / Wali</a>
				<a class="nav-link active" id="nav-contact-tab" data-toggle="tab" href="<?php echo base_url()?>siswa/kelola_data/data_periodik" role="tab" aria-controls="nav-contact" aria-selected="false">Data Periodik</a>
				<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Data Prestasi</a>
				<a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Pilihan Kompetensi Keahlian</a>
			</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
					<!-- isi Content -->
					<div class="card">
					<div class="card-body">
						<h6>Data Periodik</h6>
						<form action="#" class="mt-3">
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Tinggi Badan</label>
								<div class="col-sm-2">
								<input type="number" class="form-control" placeholder="Tinggi Badan">
								</div>
								<label for="inputPassword" class="col-sm-3 col-form-label">Cm</label>
								
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Berat Badan</label>
								<div class="col-sm-2">
								<input type="number" class="form-control" placeholder="Berat Badan">
								</div>
								<label for="inputPassword" class="col-sm-3 col-form-label">Kg</label>
								
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Jarak Tempat Tinggal Ke Sekolah</label>
								<div class="col-sm-2">
								<input type="number" class="form-control" placeholder="Jarak Tempuh">
								</div>
								<label for="inputPassword" class="col-sm-3 col-form-label">Km</label>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Waktu Tempuh Berangkat Ke Sekolah</label>
								<div class="col-sm-2">
								<input type="number" class="form-control" placeholder="Jarak Tempuh">
								</div>
								<label for="inputPassword" class="col-sm-3 col-form-label">Km</label>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-3 col-form-label">Jumlah Saudara Kandung</label>
								<div class="col-sm-4">
								<input type="number" class="form-control" placeholder="Jml. Saudara Kandung">
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
