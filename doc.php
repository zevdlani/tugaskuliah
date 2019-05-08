<?php require_once "inc/core.php"; ?>
<?php  include ('header.php'); ?>
<div class="mb-4"></div>
<?php if(isset($_SESSION['upld'])){
  echo $_SESSION['upld'];
  uset($_SESSION['upld']);
} ?>
  <?php
    $resource = opendir("upload/doc");
    while (($entry = readdir($resource)) !== false){
      if($entry != "." && $entry != ".."){
        echo '<div class="garis-file"><img src="assets/images/doc.png" width="30px" class="mr-2 mb-1"><a href="/upload/doc/'.$entry.'">'.$entry.'</a></div><br>';
      }
    }
  ?>
<?php include ('footer.php'); ?>
