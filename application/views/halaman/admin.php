<?php 
	if($this->session->flashdata('login_berhasil')){
		echo "
			<script>
			alert('login berhasil');
			</script>
		";
	}elseif($this->session->flashdata('tidak_upload')){
		echo "
			<script>
			alert('file tidak diupload');
			</script>
		";
	}

 ?>
 <div class="main-wrapper-first">
<center><h1>Hallo <?php echo $this->session->userdata('username'); ?></h1></center>

<button type="button" class="btn btn-primary"><a href="<?php echo base_url('Genbi/inputBerita'); ?>"><b>Input Berita</b></a></button>

<button type="button" class="btn btn-success"><a href="<?php echo base_url('Genbi/ubahBerita'); ?>"><b>Edit Berita</b></a></button>

</div>
