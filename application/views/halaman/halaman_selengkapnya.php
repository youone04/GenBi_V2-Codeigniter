<div class="logo">
	<img src="<?php echo base_url('assets/img/Genbi.png'); ?>" alt="">
	<center><h1>Berita GenBI Lampung</h1></center>
</div>

<header>
	<div class="card-deck">
  <div class="card">
  	<br><br>
  	<div id="gambarM">
    <img src="<?php echo base_url().'lampiran/'.$selengkapnya['file_lampiran'] ?> " alt="" width="350px" height="300px">
    </div>
    <div class="card-body">
      <h5 class="card-title"><b><?php echo $selengkapnya['judul_berita'] ?></b></h5>
      <p class="card-text"><?php echo $selengkapnya['isi_berita'] ?></p>
      <p class="card-text"><small class="text-muted"><?php echo $selengkapnya['tgl_berita'] ?></small></p>
    </div>
  </div>
</header>