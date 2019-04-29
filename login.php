<?php

	require_once "inc/core.php";

	if( isset($_SESSION['dat_user']) ){
	 header('Location: dashboard.php');
	}

	if( isset($_POST['submit'])){
	  	$user = $_POST['username'];
	  	$pass = $_POST['password'];

		if( login_cek_user($user) ) {


			if(cek_data($user, $pass)) {
				$_SESSION['dat_user'] = $user;
				header('Location: dashboard.php');
			} else {
				echo "Password salah";
			}

		} else {
			echo "Username belum terdaftar";
		}
	}

?>
<?php include ('header.php'); ?>
    <!-- Konten Utama -->
		<div class="kotak">
			<form class="kotak-form">
				<input class="form-control mb-2" type="text" name="username" placeholder="Username">
				<input class="form-control mb-3" type="password" name="password" placeholder="Password">
				<input class="btn btn-secondary mb-2" type="submit" name="submit" value="Login">
			</form>
			<div class="reglog mt-2">Belum punya akun? Silahkan <a href="register.php">Daftar</a></div>
		</div>
<?php include ('footer.php'); ?>
