<?php
	function register_user($user, $pass, $mail){
		global $fxnt;

		$user = low(escape($user));
		$pass = escape($pass);
		$mail = low(escape($mail));

		$pass = password_hash($pass, PASSWORD_DEFAULT);
		$query = "INSERT INTO users (username, password, email) VALUES ('$user', '$pass', '$mail')";

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

	function cek_data($user, $pass){
		global $fxnt;

		$user = escape($user);
		$pass = escape($pass);

		$query = "SELECT password FROM users WHERE username = '$user'";
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

	function direct_login($user){
		$_SESSION['dat_user'] = $user;
		header('Location: dashboard');
	}
?>
