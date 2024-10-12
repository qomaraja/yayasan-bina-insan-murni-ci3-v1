<!DOCTYPE html>
<html>

<head>
	<link href="<?php echo base_url('assets/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
	<?php $this->load->view('layout/meta'); ?>
	<title>Beranda</title>
	<?php $this->load->view('layout/css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>

<body class="w-auto p-3 pt-5">

	<?php $this->load->view('layout/header'); ?>

	<!-- wilayah corosel -->
	<br>
	<div id="carouselExampleCaptions" class="carousel slide" data-interval="true">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url('assets/front/images/slider/1.jpg') ?>" class="d-block w-100" alt="1">
				<!-- <div class="carousel-caption d-none d-md-block">
					<h1>First slide label</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem quasi cum nam sunt accusamus qui, culpa animi error sed aliquid laborum neque soluta eos nostrum quia magni libero maiores!</p>
					<button type="button" class="btn btn-success">Success</button>
				</div> -->
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('assets/front/images/slider/2.jpg') ?>" class="d-block w-100" alt="2">
				<!-- <div class="carousel-caption d-none d-md-block">
					<h1>First slide label</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem quasi cum nam sunt accusamus qui, culpa animi error sed aliquid laborum neque soluta eos nostrum quia magni libero maiores!</p>
					<button type="button" class="btn btn-success">Success</button>
				</div> -->
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('assets/front/images/slider/3.jpg') ?>" class="d-block w-100" alt="3">
				<!-- <div class="carousel-caption d-none d-md-block">
					<h1>First slide label</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem quasi cum nam sunt accusamus qui, culpa animi error sed aliquid laborum neque soluta eos nostrum quia magni libero maiores!</p>
					<button type="button" class="btn btn-success">Success</button>
				</div> -->
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<!-- wilayah corosel -->

	<div class="row" id="city">
		<div class="section">

			<!--wilayah pelayanan-->
			<div class="col-md-12 text-center px-5 py-2" id="layanan">
				<h1 class="font-bold font-xl">LAYANAN KAMI</h1>
				<hr>
				<div class="row">
					<div class="col-md-4">
						<h3 class="font-bold font-lg">DONASI ONLINE</h3>
						<p>Tidak perlu kemana-mana, anda bisa donasi online dengan banyak metode pembayaran</p>
						<img src="<?php echo base_url('assets/front/images/donasi_online.png') ?>" alt="donasi_online">
					</div>
					<div class="col-md-4">
						<h3 class="font-bold font-lg">JEMPUT DONASI</h3>
						<p>Tidak perlu kemana-mana, kami akan menjemput donasi anda. Mudah bukan?</p>
						<img src="<?php echo base_url('assets/front/images/jemput.png') ?>" alt="jemput">
					</div>
					<div class="col-md-4">
						<h3 class="font-bold font-lg">KONSULTASI</h3>
						<p>Butuh Bantuan? Konsultasikan dengan para konsultan profesional kami</p>
						<img src="<?php echo base_url('assets/front/images/konsultasi.png') ?>" alt="konsultasi">
					</div>
				</div>
			</div>
			<!--wilayah pelayanan-->

			<!-- wilayah alasan -->
			<div class="col-md-12 text-center px-5 my-3" id="alasan">
				<h1 class="font-bold font-xl pt-2" style="color: #ffffff;">ALASAN PILIH KAMI?</h1>
				<hr>
				<div class="row ">
					<div class="col-md-4">
						<img class="rounded-circle border border-light bg-light" src="<?php echo base_url('assets/front/images/responsif.png') ?>" alt="responsif">
						<h3 class="font-bold font-lg mt-2">RESPONSIF</h3>
						<p>Merespon kebutuhan masyarakat dengan cepat dan tepat</p>
					</div>
					<div class="col-md-4">
						<img class="rounded-circle border border-light bg-light" src="<?php echo base_url('assets/front/images/suistainable.png') ?>" alt="suistainable">
						<h3 class="font-bold font-lg mt-2">SUSTAINABLE PROGRAM</h3>
						<p>Program jangka panjang untuk kemandirian umat</p>
					</div>
					<div class="col-md-4">
						<img class="rounded-circle border border-light bg-light" src="<?php echo base_url('assets/front/images/kredibilitas.png') ?>" alt="kredibilitas">
						<h3 class="font-bold font-lg mt-2">CREDIBILITY</h3>
						<p>Bertanggung jawab penuh menjalankan amanah programi</p>
					</div>
				</div>
			</div>
			<!-- wilayah alasan -->

			<!-- wilayah high -->
			<div class="row px-5" id="high">
				<h1 class="font-bold text-center font-xl p-3">MARI BANTU MEREKA</h1>

				<div id="donasiCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php
						$chunked_array = array_chunk($donasi, 4); // Membagi array menjadi bagian yang lebih kecil, 4 item per bagian
						foreach ($chunked_array as $index => $chunk) {
						?>
							<div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
								<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
									<?php foreach ($chunk as $row) { ?>
										<div class="col">
											<a href="<?php echo base_url('/donasi/detail/' . $row->id_donasi); ?>">
												<div class="card" id="card">
													<img src="<?php echo base_url('assets/' . $row->img1); ?>" class="card-img-top" alt="...">
													<div class="card-body">
														<h5 class="card-title"><?php echo $row->nama_donasi; ?></h5>
														<p class="card-text text-truncate-2"><?php echo $row->deskripsi_donasi; ?></p>
													</div>
													<!-- <div class="progress">
														<div class="progress-bar" role="progressbar" style="width: <?php echo $row->perolehan_donasi; ?>%" aria-valuenow="<?php echo $row->target_donasi; ?>" aria-valuemin="0" aria-valuemax="100"></div>
													</div> -->
													<div class="card-body">
														<div class="row">
															<div class="col">
																<p class="card-link"><?php echo $row->masa_aktif; ?><br>Hari Lagi</p>
															</div>
															<div class="col">
																<p class="card-link text-end">Terkumpul<br><?php echo 'Rp.' . nominal($row->perolehan_donasi); ?></p>
															</div>
														</div>
													</div>
												</div>
											</a>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>
					<a class="carousel-control-prev" href="#donasiCarousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#donasiCarousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
			<!-- wilayah high -->

			<!-- wilayah info -->
			<div class="col-md-12 text-center px-5 my-3" id="alasan">
				<div class="row py-5">
					<div class="col-md">
						<!-- <img src="<?php echo base_url('assets/front/images/donasi_online.png') ?>" alt="donasi_online"> -->
						<h3 class="font-bold font-lg">*****</h3>
						<h3 class="font-bold font-lg">DONASI</h3>
					</div>
					<div class="col-md-1">
						<div class="vl"></div>
					</div>
					<div class="col-md">
						<h3 class="font-bold font-lg">*****</h3>
						<h3 class="font-bold font-lg">TERKUMPUL</h3>
					</div>
					<div class="col-md-1">
						<div class="vl"></div>
					</div>
					<div class="col-md">
						<h3 class="font-bold font-lg">*****</h3>
						<h3 class="font-bold font-lg">TRANSAKSI</h3>
					</div>
				</div>
			</div>
			<!-- wilayah info -->

			<!-- wilayah artikel -->
			<div class="row px-5" id="high">
				<h1 class="font-bold text-center font-xl p-3">KISAH KAMI</h1>

				<div id="donasiCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php
						$chunked_array = array_chunk($donasi, 4); // Membagi array menjadi bagian yang lebih kecil, 4 item per bagian
						foreach ($chunked_array as $index => $chunk) {
						?>
							<div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
								<div class="row">
									<?php foreach ($chunk as $row) { ?>
										<div class="col-3">
											<a href="#">
												<div class="card">
													<img src="<?php echo base_url('assets/' . $row->img1); ?>" class="card-img-top" alt="...">
													<div class="card-body">
														<h5 class="card-title"><?php echo $row->nama_donasi; ?></h5>
														<p class="card-text text-truncate-2"><?php echo $row->deskripsi_donasi; ?></p>
													</div>
												</div>
											</a>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>
					<a class="carousel-control-prev" href="#donasiCarousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#donasiCarousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!-- wilayah artikel -->

		</div>
	</div>

	<div class="row py-5" id="rentyour">
		<div class="section font-white">
			<div class="col-md-12 text-center">
				<h1 class="font-lg font-bold">SEKILAS TENTANG KAMI</h1>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<p class="font-md font-medium">Yayasan Bina Insan Murni (BINSANI) adalah lembaga filantropi profesional yang berkhidmat mengangkat harkat martabat masyarakat dhuafa (masyarakat kurang mampu) melalui penghimpunan dana donasi masyarakat dan dana corporate sosial responsibilty perusahaan.</p>
					</div>
					<div class="col-md-6">
						<p class="font-md font-medium">Program-program sosial dan pemberdayaan masyarakat tidak mampu yang digulirkan telah menjadikan dana masyarakat yang dihimpun BINSANI memiliki nilai tambah dan manfaat yang berlipat ganda bagi masyarakat kurang mampu. Karena BINSANI berusaha senantiasa menumbuhkan iklim transparansi dan profesionalitas untuk mengawal amanah masyarakat yang demikian besar. </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row py-2" id="subscribe">
		<div class="section font-white">
			<div class="col-md-12 text-center">
				<h1 class="font-lg font-bold">PARTNER BANK</h1>
				<hr>
				<div class="row">
					<div class="col-md col-ce"></div>
					<div class="col-md col-ce">
						<img class="rounded-circle border border-light bg-light" src="<?php echo base_url('assets/front/images/BRI_logo.png'); ?>">
						<h6 class="font-bold pt-2">Bank Rakyat Indonesia (BRI)</h6>
					</div>
					<div class="col-md col-ce">
						<img class="rounded-circle border border-light bg-light" src="<?php echo base_url('assets/front/images/BSI_logo.png'); ?>">
						<h6 class="font-bold pt-2">Bank Syariah Indonesia (BSI)</h6>
					</div>
					<div class="col-md col-ce"></div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('layout/footer'); ?>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<?php $this->load->view('layout/js'); ?>

</body>

</html>