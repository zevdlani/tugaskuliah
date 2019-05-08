<?php

	require_once "inc/core.php";

	$error = '';

	if( isset($_SESSION['dat_user']) ){
	 header('Location: dashboard');
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
								header('Location: login');
				  		} else{
				  			$_SESSION['error'] = "Gagal daftar, silahlan coba lagi";
				  		}
						} else{
							$_SESSION['error'] = "Data tidak boleh kosong";
						}
					} else {
						$_SESSION['error'] = "Email sudah digunakan";
					}
				} else{
					$_SESSION['error'] = "Password tidak sama";
				}
			} else {
				$_SESSION['error'] = "Username sudah digunakan";
			}
		}
?>
<?php include ('header.php'); ?>
  <div class="kotak-besar">
		<?php if(isset($_SESSION['error'])){ ?>
			<div class="alert alert-danger text-center">
				<?php echo $_SESSION['error'];
				unset($_SESSION['error']); ?>
			</div>
		<?php } ?>
		<div class="kotak">
			<div class="kotak-form">
				<form action="register" method="post">
					<input class="form-control mb-2" type="text" name="username" placeholder="Username">
					<input class="form-control mb-2" type="password" name="password" placeholder="Password">
					<input class="form-control mb-2" type="password" name="passworc" placeholder="Konfirmasi Password">
					<input class="form-control mb-3" type="email" name="email" placeholder="Email">
					<input class="btn btn-secondary mb-2" type="submit" name="submit" value="Daftar">
				</form>
				<div class="reglog mt-2">Sudah punya akun? Silahkan <a href="/login">Masuk</a></div>
			</div>
		</div>
	</div>
<?php include ('footer.php'); ?>
