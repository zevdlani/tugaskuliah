<?php require('header.php'); ?>
<div class="mb-4"></div>
<div class="video-post">
    <?php
      $resource = opendir("upload/vid");
      while (($entry = readdir($resource)) !== false){
        if($entry != "." && $entry != ".."){
        echo '<video width="100%" controls><source src="/tugaskuliah/upload/vid/'.$entry.'"type="video/mp4">Your browser does not support the video player</video><br><br><br>';
        }
      }
    ?>
</div>
<?php require('footer.php'); ?>
