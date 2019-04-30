<?php require_once "inc/core.php"; ?>
<?php include ('header.php'); ?>
<div class="mb-4"></div>
<div class="img-post">
  <?php
    $resource = opendir("upload/img");
    while (($entry = readdir($resource)) !== false){
      if($entry != "." && $entry != ".."){
        echo '<a href="/upload/img/'.$entry.'"><img src="/upload/img/'.$entry.'"></a>';
      }
    }
  ?>
</div>
<?php include ('footer.php'); ?>
