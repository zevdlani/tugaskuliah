<?php

	require_once "inc/core.php";

	if( !isset($_SESSION['dat_user']) ){
	 header('Location: index.php');
 }

?>
<?php include ('header.php'); ?>
			<div class="upload" id="upload">
				<form action="inc/function.php" method="post" enctype="multipart/form-data">
					<input class="btn btn-outline-secondary" type="file" name="file"><br>
					<input class="btn btn-secondary mt-3" type="submit" name="submit" value="Unggah">
				</form>
			</div>
<?php include ('footer.php'); ?>
