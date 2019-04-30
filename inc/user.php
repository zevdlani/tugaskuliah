<?php
	function register_user($user, $pass, $mail){
		global $fxnt;

		$user = strtolower($user);
		$mail = strtolower($mail);

		$user = mysqli_real_escape_string($fxnt, $user);
		$pass = mysqli_real_escape_string($fxnt, $pass);
		$mail = mysqli_real_escape_string($fxnt, $mail);

		$pass = password_hash($pass, PASSWORD_DEFAULT);
		$query = "INSERT INTO users (username, password, email) VALUES ('$user', '$pass', '$mail')";

		if(mysqli_query($fxnt, $query)){
			return true;
		} else {
			return false;
		}
	}

	function register_cek_user($user){
		global $fxnt;

		$user = mysqli_real_escape_string($fxnt, $user);

		$query = "SELECT * FROM users WHERE username = '$user' ";

		if( $result = mysqli_query($fxnt, $query) ){
			if( mysqli_num_rows($result) == 0) return true;
				else return false;
		}
	}

	function register_cek_mail($mail){
		global $fxnt;

		$mail = mysqli_real_escape_string($fxnt, $mail);

		$query = "SELECT * FROM users WHERE email = '$mail' ";

		if( $result = mysqli_query($fxnt, $query) ){
			if( mysqli_num_rows($result) == 0) return true;
				else return false;
		}
	}

	function cek_data($user, $pass){
		global $fxnt;

		$user = mysqli_real_escape_string($fxnt, $user);
		$pass = mysqli_real_escape_string($fxnt, $pass);

		$query = "SELECT password FROM users WHERE username = '$user'";
		$result = mysqli_query($fxnt, $query);
		$hash = mysqli_fetch_assoc($result)['password'];

		if( password_verify($pass, $hash) ){
			return true;
		} else{
			return false;
		}
	}


	function login_cek_user($user){
		global $fxnt;

		$user = mysqli_real_escape_string($fxnt, $user);

		$query = "SELECT * FROM users WHERE username = '$user' ";

		if( $result = mysqli_query($fxnt, $query) ){
			if( mysqli_num_rows($result) != 0) return true;
				else return false;
		}
	}
?>
