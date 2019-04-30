<?php

	require_once "inc/core.php";
	require_once "inc/upload.php";

	if( !isset($_SESSION['dat_user']) ){
	 header('Location: /');
 }

?>
<?php include ('header.php'); ?>
<div class="kotak-upload">
	 <?php if($error != ''){ ?>
		 <div class="alert alert-danger text-center">
			 <?php echo $error; ?>
		 </div>
	 <?php } ?>
	 <div class="upload text-center" id="upload">
		 <form action="inc/upload.php" method="post" enctype="multipart/form-data">
			 <input class="btn btn-outline-secondary" type="file" name="file"><br>
			 <input class="btn btn-secondary mt-3" type="submit" name="submit" value="Unggah">
		 </form>
	 </div>
 </div>
<?php include ('footer.php'); ?>
