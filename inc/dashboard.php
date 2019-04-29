<?php require('header.php'); ?>

<?php
	require_once "core/init.php";

	if( !isset($_SESSION['dat_user']) ){
	 header('Location: index.php');
	}

?>








<?php require('footer.php'); ?>
