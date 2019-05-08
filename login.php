<?php

	require_once "inc/core.php";

	$error = '';

	if( isset($_SESSION['dat_user']) ){
	 header('Location: dashboard');
	}

	if( isset($_POST['submit'])){
	  	$user = $_POST['username'];
	  	$pass = $_POST['password'];

		if( login_cek_user($user) ) {

			if(cek_data($user, $pass)) {
				$_SESSION['dat_user'] = $user;
				header('Location: dashboard');
			} else {
				$error = "Password salah!";
			}
		} else {
			$error = "Username salah!";
		}
	}
?>
<?php include ('header.php'); ?>
	<div class="kotak-besar">
		<?php if(isset($error)){ ?>
			<div class="alert alert-danger text-center">
				<?php echo $error; ?>
			</div>
		<?php } ?>
		<div class="kotak">
			<form class="kotak-form" method="post" action="login">
				<input class="form-control mb-2" type="text" name="username" placeholder="Username">
				<input class="form-control mb-3" type="password" name="password" placeholder="Password">
				<input class="btn btn-secondary mb-2" type="submit" name="submit" value="Login">
			</form>
			<div class="reglog mt-2">Belum punya akun? Silahkan <a href="/register">Daftar</a></div>
		</div>
	</div>
<?php include ('footer.php'); ?>
