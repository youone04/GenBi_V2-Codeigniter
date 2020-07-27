<?php 
  if($this->session->flashdata('hapus')){
    echo "
        <script>
          alert('Data Berhasil di Hapus');
        </script>
    ";

  }


 ?>
 <?php if($this->session->flashdata('data_sukses')) : ?>
  <?php echo "<script>
        alert('data berhasil diupload');
        </script>
        "; ?>
<?php endif; ?>


<section class="">

	<div class="main-wrapper-first">
		<header>
		<div class="logo">
			<img src="<?php echo base_url('assets/img/Genbi.png'); ?>" alt="">
			<center><h1>Berita GenBI Lampung</h1></center>
		</div>
				
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
     <button type="button" class="btn btn-primary"><a href="<?php echo base_url() ?>Genbi/ubahBeritaAdmin/<?php echo $br['id_berita']; ?>"><b>Ubah Berita</b></a></button> <br>

      <button type="button" class="btn btn-danger"><a href="<?php echo base_url() ?>Genbi/hapusBeritaAdmin/<?php echo $br['id_berita']; ?> " onclick="return confirm('Anda yakin');"><b>Hapus Berita</b></a></button>
    <div class="card-footer">
      <small class="text-muted"></i><?php echo $br['tgl_berita']; ?></li></small>
    </div>
  </div>

<?php endforeach; ?>
</header>
	</section>