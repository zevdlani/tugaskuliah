<?php require('header.php'); ?>
    <?php
      $resource = opendir("upload/vid");
      while (($entry = readdir($resource)) !== false){
        if($entry != "." && $entry != ".."){
        echo '<video width="100%" controls><source src="/upload/vid/'.$entry.'"type="video/mp4">Your browser does not support the video player</video>';
        }
      }
    ?>
<?php require('footer.php'); ?>
