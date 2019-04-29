<?php

	require_once "inc/core.php";

	if( isset($_SESSION['dat_user']) ){
	 header('Location: inc/dashboard.php');
	}

	if( isset($_POST['submit'])){
	  	$user = $_POST['username'];
	  	$pass = $_POST['password'];
	  	$pasc = $_POST['passworc'];
	  	$mail = $_POST['email'];

	  	if( register_cek_user($user) ){

	  		if($pass == $pasc){

	  			if( register_cek_mail($mail) ){

	  				if( !empty(trim($user)) && !empty(trim($pass)) && !empty(trim($mail)) ){

				  		if(register_user($user, $pass, $mail)){

				  			echo "Selamat akun anda berhasil di daftarkan";
								header('Location: login.php');

				  		} else{
				  			echo "Gagal daftar, Silahlan Coba lain kali";
				  		}

					} else{
						echo "Data tidak boleh kosong :(";
					}

				} else {
					echo "Email sudah digunakan :v";
				}

			} else{
				echo "Password tidak sama :p";
			}

		} else {
			echo "Username sudah digunakan :u";
		}
	}
?>
<?php include ('header.php'); ?>
    <!-- Konten Utama -->
		<div class="kotak">
			<div class="kotak-form">
				<form action="register.php" method="post">
					<input class="form-control mb-2" type="text" name="username" placeholder="Username">
					<input class="form-control mb-2" type="password" name="password" placeholder="Password">
					<input class="form-control mb-2" type="password" name="passworc" placeholder="Konfirmasi Password">
					<input class="form-control mb-3" type="email" name="email" placeholder="Email">
					<input class="btn btn-secondary mb-2" type="submit" name="submit" value="Daftar">
				</form>
				<div class="reglog mt-2">Sudah punya akun? Silahkan <a href="login.php">Masuk</a></div>
			</div>
		</div>
<?php include ('footer.php'); ?>
