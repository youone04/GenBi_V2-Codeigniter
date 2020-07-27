<div class="logo">
	<img src="<?php echo base_url('assets/img/Genbi.png'); ?>" alt="">
	<center><h1>Pengumuman</h1></center>
</div>
<header>

	<div class="card-deck">
  <div class="card">
  	<br><br>
  	<div id="gambarM">
  	
    <!-- <img src="" alt="" width="350px" height="300px"> -->
    </div>
    <div class="card-body">
      <h5 class="card-title"><b><?php echo $pengumuman['judul_pengumuman'] ?></b></h5>
      <p class="card-text"><?php echo $pengumuman['isi_pengumuman'] ?></p>
      <p class="card-text"><small class="text-muted"><?php echo $pengumuman['tgl_pengumuman'] ?></small></p>
    </div>
  </div>
</header>