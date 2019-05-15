<?php
	function register_user($mail, $pass, $user){
		global $fxnt;

		$mail = low(escape($mail));
		$pass = escape($pass);
		$user = low(escape($user));


		$pass = password_hash($pass, PASSWORD_DEFAULT);
		$query = "INSERT INTO users (email, password, username) VALUES ('$mail', '$pass', '$user')";

		if(mysqli_query($fxnt, $query)) return true;
		return false;
	}

	function cek_mail($mail){
		global $fxnt;

		$mail = escape($mail);

		$query = "SELECT * FROM users WHERE email = '$mail' ";

		if( $result = mysqli_query($fxnt, $query) ){
			return mysqli_num_rows($result);
		}
	}

	function cek_user($user){
		global $fxnt;

		$user = escape($user);

		$query = "SELECT * FROM users WHERE username = '$user' ";

		if( $result = mysqli_query($fxnt, $query) ){
			return mysqli_num_rows($result);
		}
	}

	function cek_data($mail, $pass){
		global $fxnt;

		$mail = escape($mail);
		$pass = escape($pass);

		$query = "SELECT password FROM users WHERE email = '$mail'";
		$result = mysqli_query($fxnt, $query);
		$hash = mysqli_fetch_assoc($result)['password'];

		if( password_verify($pass, $hash) ) return true;
		else return false;
	}

	function escape($data){
		global $fxnt;
		return mysqli_real_escape_string($fxnt, $data);
	}

	function low($data){
		return strtolower($data);
	}

	function direct_das($mail){
		$_SESSION['dat_user'] = $mail;
		header('Location: dashboard');
	}
?>
