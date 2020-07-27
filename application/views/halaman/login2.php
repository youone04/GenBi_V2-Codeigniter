<?php 
	if($this->session->flashdata('login_gagal')){
		echo "
			<script>
			alert('login gagal');
			</script>
		";
	}

 ?>


<h3>Login Akun Laporan</h3>


<form method="post" onSubmit="return validasi()" action="">

	<ul>
	<li>
		<label>Username  </label>
		<input type="text" name="username" placeholder="masukan username" autocomplete="none" id="email">
	</li>

	

	<li>
		<label>Password  </label>
		<input type="password" name="password" placeholder="masukan password" id="password">
	</li>

	
	<button type="submit" name="submit">Masuk</button>
</ul>

</form>

<script>
   function validasi() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
   
    if (email != "" && password != ""){
      return true;
    } 
    else{
      alert('Semua Kolom Harus diisi!');
      return false;
    }
  }

</script>