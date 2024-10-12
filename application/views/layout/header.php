<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
	<div class="container-fluid px-5">
		<a href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('assets/front/images/binsani_logo_full.png'); ?>" width="50%"></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<div class="navbar-nav">
				<a class="nav-link" href="<?php echo base_url('/donasiaja'); ?>">Donasi</a>
				<a class="nav-link" href="<?php echo base_url('/artikel'); ?>">Artikel</a>
				<a class="nav-link" href="<?php echo base_url('/perkenalan'); ?>">Perkenalan</a>
				<a class="nav-link" href="<?php echo base_url('/saran'); ?>">Saran</a>
			</div>
			<form class="d-flex" role="search" action="<?php echo site_url('donasi/search'); ?>" method="GET">
				<input class="form-control ms-3" type="search" name="query" placeholder="Search" aria-label="Search">
			</form>
		</div>
	</div>
</nav>