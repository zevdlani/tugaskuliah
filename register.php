<?php

	require_once "inc/core.php";

	$error = '';

	if( isset($_SESSION['dat_user']) ) header('Location: dashboard');

	if( isset($_POST['submit']) ){
			$mail = $_POST['email'];
	  	$pass = $_POST['password'];
	  	$pasc = $_POST['passworc'];


	  	if( cek_mail($mail) == 0){
	  		if($pass == $pasc){
	  				if( !empty($mail) && !empty($pass) ){
							$user = $mail;
							$user = explode("@",$user);
							$user= $user[0];
				  		if(register_user($mail, $pass, $user)){
								$_SESSION['berhsl'] = "Berhasil daftar, silahkan masuk";
								header('Location: login');
				  		} else $_SESSION['error'] = "Gagal daftar, silahlan coba lagi";
						} else $_SESSION['error'] = "Tidak boleh ada yang kosong";
				} else $_SESSION['error'] = "Password tidak sama";
			} else $_SESSION['error'] = "Email sudah digunakan";
		}
?>
<?php include ('header.php'); ?>
  <div class="kotak-besar">
		<?php if(isset($_SESSION['error']) ){ ?>
			<div class="alert alert-danger text-center">
				<?php echo $_SESSION['error'];
				unset($_SESSION['error']); ?>
			</div>
		<?php } ?>
		<div class="kotak">
			<div class="kotak-form">
				<form action="register" method="post">
					<input class="form-control mb-2" type="email" name="email" placeholder="Email">
					<input class="form-control mb-2" type="password" name="password" placeholder="Password">
					<input class="form-control mb-2" type="password" name="passworc" placeholder="Konfirmasi Password">
					<input class="btn btn-secondary mb-2" type="submit" name="submit" value="Daftar">
				</form>
				<div class="reglog mt-2">Sudah punya akun? Silahkan <a href="login">Masuk</a></div>
			</div>
		</div>
	</div>
<?php include ('footer.php'); ?>
