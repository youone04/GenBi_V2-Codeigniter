
<center><h1>Hallo <?php echo $this->session->userdata('username'); ?></h1></center>

<div class="container">	
<form action="<?php echo base_url('Genbi/ProsesInputBerita'); ?>" method="post" enctype="multipart/form-data" onSubmit="return validasi(this)">
<ul>
	<li>
		<div class="form-group">
			<label class="control-label col-sm-2" for="judul">Masukan Judul</label>
				<div class="col-sm-10">
					<input type="text" id="judul" class="form-control" name="judul_berita" placeholder="masukan judul...">
					<small id="note"></small>
					</div>
			</div>
	</li>
	<li>

		<div class="form-group">
			<label class="control-label col-sm-2" for="text">Masukan Berita</label>
			<div class="col-sm-10">
			    <textarea class="form-control" name="isi_berita" id="text" rows="7" placeholder="masukan berita..."></textarea>
			    <small id="note2"></small>
			    <small id="note4"></small>
			</div>
		</div>
	</li>
</ul>
		<div class="form-group">
			<div class="col-sm-10">
			<input type="file" name="file_lampiran" id="lampiran">
			<small id="note3"></small>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary" name="submit">kirim</button>
			</div>
		</div>
</form>
</div>