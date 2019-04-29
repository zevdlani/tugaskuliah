<?php

	require_once "inc/core.php";

	if( !isset($_SESSION['dat_user']) ){
	 header('Location: index.php');
 }

?>
<?php include ('header.php'); ?>
<a href="inc/logout.php">Logout</a>
<?php include ('footer.php'); ?>
