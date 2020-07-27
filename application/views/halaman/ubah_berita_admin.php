
<center><h1>Hallo <?php echo $this->session->userdata('username'); ?></h1></center>
<!-- belum di buat proses ubah di kontroler -->

<div class="container">	
<form action="<?php echo base_url('Genbi/prosesUbahBerita'); ?>" method="post" enctype="multipart/form-data">
<ul>
	<li>
		<div class="form-group">
			<label class="control-label col-sm-2" for="judul">Masukan Judul</label>
				<div class="col-sm-10">
					<input type="hidden" name="id_berita" value="<?php echo $selengkapnya['id_berita'] ?>">
					<input type="text" id="judul" class="form-control" name="judul_berita" placeholder="masukan judul..." value="<?php echo $selengkapnya['judul_berita'] ?>" >
					</div>
			</div>
	</li>
	<li>

		<div class="form-group">
			<label class="control-label col-sm-2" for="text">Masukan Berita</label>
			<div class="col-sm-10">
			    <textarea class="form-control" name="isi_berita" id="text" rows="7" placeholder="masukan berita..."><?php echo $selengkapnya['isi_berita'] ?></textarea>
			</div>
		</div>
	</li>
</ul>
		<div class="form-group">
			<div class="col-sm-10">
		<input type="hidden" name="oldGambar" value="<?php echo $selengkapnya['file_lampiran']; ?>">
		<input type="file" name="file_lampiran"><br><br>
		<br>
		<b>gambar sebelumnya :</b>
		<br>
		<div id="gambar_berita">
    	<img src="<?php echo base_url().'lampiran/'.$selengkapnya['file_lampiran']; ?>" class="card-img-top" alt="...">
   		 </div>
		<button type="submit" class="btn btn-primary" name="submit">Ubah</button>
			</div>
		</div>

</form>
</div>