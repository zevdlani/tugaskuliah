<?php require_once "inc/core.php"; ?>
<?php include ('header.php'); ?>
<div class="mb-4"></div>
  <?php
    $resource = opendir("upload/zip");
    while (($entry = readdir($resource)) !== false){
      if($entry != "." && $entry != ".."){
        echo '<div class="garis-file"><img src="assets/images/zip.png" width="20px" class="mr-2 mb-1"><a href="/upload/zip/'.$entry.'">'.$entry.'</a></div><br>';
      }
    }
  ?>
<?php include ('footer.php'); ?>
