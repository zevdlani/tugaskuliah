<?php

	require_once "inc/core.php";

	if( !isset($_SESSION['dat_user']) ){
	 header('Location: /');
 }

?>
<?php include ('header.php'); ?>
<?php include ('inc/upload.php'); ?>
 <div class="kotak-upload">
		<?php if($error != ''){ ?>
			<div class="alert alert-danger text-center">
				<?php echo $error; ?>
			</div>
		<?php } ?>
		<?php if($buflr != ''){ ?>
			<div class="alert alert-danger text-center">
				<?php echo $buflr; ?>
			</div>
		<?php } ?>
		<div class="upload text-center" id="upload">
			<form action="dashboard" method="post" enctype="multipart/form-data">
				<input class="btn btn-outline-secondary" type="file" name="file"><br>
				<input class="btn btn-secondary mt-3" type="submit" name="submit" value="Unggah">
			</form>
		</div>
	</div>
<?php include ('footer.php'); ?>
