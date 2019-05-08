<?php require_once "inc/core.php"; ?>
<?php include ('header.php'); ?>
<div class="mb-4"></div>
<div class="video-post">
<?php if(isset($_SESSION['upld'])){
  echo $_SESSION['upld'];
  unset($_SESSION['upld']);
} ?>
  <?php
    $resource = opendir("upload/vid");
    while (($entry = readdir($resource)) !== false){
      if($entry != "." && $entry != ".."){
        echo '<video width="100%" controls><source src="/upload/vid/'.$entry.'"type="video/mp4">Your browser does not support the video player</video><br><br><br>';
      }
    }
  ?>
</div>
<?php include ('footer.php'); ?>
