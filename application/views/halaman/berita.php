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
                <h1 class="text-white text">Berita GenBI Lampung</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="featured-area">
				
<?php foreach($berita as $br) : ?>
	<br><br><br>
	<div class="card-group">
  <div class="card">
  	<br><br><br>
  	 <div id="gambar_berita">
    <img src="<?php echo base_url().'lampiran/'.$br['file_lampiran']; ?>" class="card-img-top" alt="...">
    </div>
    <div class="card-body">
      <h5 class="card-title"><?php echo $br['judul_berita']; ?></h5>
      <p class="card-text"><?php  echo "<p>".substr($br['isi_berita'],0,500)."</p>"; ?> <a href="<?php base_url() ?>HalamanBeritaSelengkapnya/<?php echo $br['id_berita']; ?>">selengkapnya....</a></p>
      
    </div>
    <div class="card-footer">
      <small class="text-muted"></i><?php echo $br['tgl_berita']; ?></li></small>
    </div>
  </div>

<?php endforeach; ?>
</section>
  <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
  </div>
</div>

    <script src="<?php echo base_url('assets/js/vendor/jquery-2.2.4.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.sticky.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>