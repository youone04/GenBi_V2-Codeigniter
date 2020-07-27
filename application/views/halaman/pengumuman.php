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
                <h1 class="text-white text">Pengumuman GenBI Lampung</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

<section class="featured-area">
				
<?php foreach($pengumuman as $png) : ?>
	<br><br><br>
	<div class="card-group">
  <div class="card">
  	<br><br><br>
  	<!--  <div id="gambar_berita">
    <img src="<?php echo base_url().'lampiran/'.$png['file_lampiran'] ?>" class="card-img-top" alt="...">
    </div> -->
    <div class="card-body">
      <h5 class="card-title"><?php echo $png['judul_pengumuman'] ?></h5>
      <p class="card-text"><?php  echo "<p>".substr($png['isi_pengumuman'],0,250)."</p>"; ?> <a href="<?php echo base_url() ?>Genbi/SelengkapnyaPengumuman/<?php echo $png['id_pengumuman'] ?>">selengkapnya....</a></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"></i><?php echo $png['tgl_pengumuman'] ?></li></small>
    </div>
  </div>

<?php endforeach; ?>
</header>
	</div>
</section>