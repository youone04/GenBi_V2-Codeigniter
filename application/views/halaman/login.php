<?php 
	if($this->session->flashdata('login_gagal')){
		echo "
			<div class='alert alert-danger' role='alert'>
        Password atau Sandi Anda Salah!
      </div>
		";
	}

 ?>

	<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          	<div class="logo">
				<img src="<?php echo base_url('assets/img/Genbi.png'); ?>" alt="">
			</div><br>
            <h5 class="card-title text-center">Masuk</h5>
              <div class="form-label-group">
              	<form class="form-signin" method="post" onSubmit="return validasi(this)" action="">
                <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="username"  autofocus>
                <label for="inputEmail">Username</label>
              
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"  autofocus>
                <label for="inputPassword">Password</label>
               <span align='center' id='hasil'>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">masuk</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit" name=""><i class="fab fa-google mr-2"></i> Generasai Baru Indonesia</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Lampung</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script>
   function validasi(form) {
    var email = document.getElementById("inputEmail").value;
    var password = document.getElementById("inputPassword").value;
     var total = document.getElementById('hasil');
   
   if(password.length < 6){

    total.innerHTML = '<div class ="alert alert-warning" role="alert"> Password Harus Lebih dari 5 Karakter!</div>';
    return false;

   }
    else if (email != "" && password != ""){
      return true;
    }
    else{
      total.innerHTML ='<div class="alert alert-warning" role="alert">semua kolom harus diisi!</div>';
      return false;
    }
  }

</script>