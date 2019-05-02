<?php require_once "inc/core.php"; ?>
<?php include ('header.php'); ?>
<div class="mb-4"></div>
  <?php
  $parts = parse_url("upload/doc");
  $filename = basename($parts["path"]);
    $resource = opendir("upload/apk");
    while (($entry = readdir($resource)) !== false){
      if($entry != "." && $entry != ".."){
        echo '<div class="garis-file"><img src="assets/images/apk.png" width="20px" class="mr-2 mb-1"><a href="/upload/apk/'.$entry.'">'.$filename.'</a></div><br>';
      }
    }
  ?>
<?php include ('footer.php'); ?>
