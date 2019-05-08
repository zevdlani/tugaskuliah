<?php require_once "inc/core.php"; ?>
<?php include ('header.php'); ?>
<div class="mb-3"></div>
<?php if(isset($_SESSION['upld'])) { ?>
  <div class="alert alert-success text-center">
  <?php echo $_SESSION['upld'];
  unset($_SESSION['upld']); ?>
  </div>
<?php } ?>
<div class="video-post">
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
