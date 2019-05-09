<?php require_once "inc/core.php"; ?>
<?php include ('header.php'); ?>
<div class="mb-3"></div>
<?php if(isset($_SESSION['upld'])) { ?>
  <div class="alert alert-success text-center">
  <?php echo $_SESSION['upld'];
  unset($_SESSION['upld']); ?>
  </div>
<?php } ?>
  <?php
    $resource = opendir("upload/apk");
    while (($entry = readdir($resource)) !== false){
      if($entry != "." && $entry != ".."){
        echo '<div class="garis-file"><img src="assets/images/apk.png" width="20px" class="mr-2 mb-1"><a href="upload/apk/'.$entry.'">'.$entry.'</a></div><br>';
      }
    }
  ?>
<?php include ('footer.php'); ?>
