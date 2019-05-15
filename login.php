<?php

	require_once "inc/core.php";

	$error = '';

	if( isset($_SESSION['dat_user']) ) header('Location: dashboard');

	if( isset($_POST['submit']) ){
	  	$mail = $_POST['email'];
	  	$pass = $_POST['password'];
		if( !empty($mail) && !empty($pass)){
			if( cek_mail($mail) != 0) {
				if( cek_data($mail, $pass) ){
					direct_das($mail);
				} else $_SESSION['error'] = "Password salah";
			} else $_SESSION['error'] = "Email salah";
		} else $_SESSION['error'] = "Tidak boleh ada yang kosong";
	}
?>
<?php include ('header.php'); ?>
	<div class="kotak-besar">
		<?php if(isset($_SESSION['berhsl']) ){ ?>
			<div class="alert alert-success text-center">
				<?php echo $_SESSION['berhsl'];
				unset($_SESSION['berhsl']);?>
			</div>
		<?php } ?>
		<?php if(isset($_SESSION['error']) ){ ?>
			<div class="alert alert-danger text-center">
				<?php echo $_SESSION['error'];
				unset($_SESSION['error']);?>
			</div>
		<?php } ?>
		<div class="kotak">
			<form class="kotak-form" method="post" action="login">
				<input class="form-control mb-2" type="text" name="email" placeholder="Email">
				<input class="form-control mb-3" type="password" name="password" placeholder="Password">
				<input class="btn btn-secondary mb-2" type="submit" name="submit" value="Login">
			</form>
			<div class="reglog mt-2">Belum punya akun? Silahkan <a href="register">Daftar</a></div>
		</div>
	</div>
<?php include ('footer.php'); ?>
