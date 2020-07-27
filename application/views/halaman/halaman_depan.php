<?php if($this->session->flashdata('data_sukses')) : ?>
	<?php echo "<script>
				alert('data berhasil diupload');
				</script>
				"; ?>
<?php endif; ?>
<div>
	<div class="main-wrapper-first">
			<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<img src="<?php echo base_url('assets/img/Genbi.png'); ?>" alt="">
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="<?php echo base_url('Genbi'); ?>">Home</a>
									<a href="<?php echo base_url('Genbi/Berita'); ?>">Berita</a>
									<a href="<?php echo base_url('Genbi/Pengumuman'); ?>">Pengumuman</a>
									<a href="#">Tentang</a>
									<a href="<?php echo base_url('Genbi/Login'); ?>">Login</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center generic-height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<span class="text-white top text">#Energiuntuknegri</span>
								<h1 class="text-white text">GenBI | Prov.Lampung</h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start Feature Area -->
			<section class="featured-area">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="single-generic-feature d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-warning"></span>
								</div>
								<?php $j=0; ?>
								<?php foreach($pengumuman as $png) : ?>
								<div class="desc">
									<h6 class="title text-uppercase"><?php echo $png['judul_pengumuman'] ?></h6>
									<p><?php  echo "<p>".substr($png['isi_pengumuman'],0,250)."</p>"; ?>
										<a href="<?php echo base_url() ?>Genbi/SelengkapnyaPengumuman/<?php echo $png['id_pengumuman'] ?>">Selengkapnya...</a>
									</p>
								</div>
								<?php if ($j++ > -1) break; ?>
								<?php endforeach; ?>

							</div>
						</div>
						<div class="col-md-4">
							<div class="single-generic-feature d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-code"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">SOON</h6>
									<p>Apa itu GenBI? GenBI merupakan singkatan dari
									Geneerasi Baru Indonesia yang merupakan komunitas
									penerima beasiswa Bank Indonesia, GenBI melakukan 
									kegiatan sosial yang membantu masyarkat </p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-generic-feature d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-clock"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">SOON</h6>
									<p>Over 92% of computers are infected with Adware and spyware. Such software is rarely accompanied by Over 92% of computers are infected with Adware and spyware. Such software is rarely accompanied by uninstall utilityuninstall utility</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Feature Area -->
			<!-- About Generic Start -->
			<section class="about-generic-area">
				<div class="container border-top-generic">
					<h3 class="about-title mb-40">Berita Terakhir ....	</h3>
					<div class="row">

						<?php $i=0; ?>
						<?php foreach($text as $txt) : ?>
						<div class="col-md-12">
							<div class="img-text">
									<div id="gambar_halaman_depan">
									<img class="img-responsive" src=" <?php echo base_url().'lampiran/'.$txt['file_lampiran'] ?>" alt="" class="img-fluid float-left mr-30 mb-20">
									</div><br> 
								<b><?php echo $txt['judul_berita'] ?></b> | </i><?php echo $txt['tgl_berita'] ?></li>
								<p><?php  echo "<p>".substr($txt['isi_berita'],0,900)."</p>"; ?>
									<a href="<?php base_url() ?>Genbi/HalamanBeritaSelengkapnya/<?php echo $txt['id_berita'] ?>">selengkapnya....</a></p>
								</p>
							</div>
						</div>

						<?php $i++;
							if($i>1){
								break;
								}
						?>
						<?php endforeach; ?>
							
					</div>
				</div>
			</section>
