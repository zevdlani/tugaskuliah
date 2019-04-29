<?php require('header.php'); ?>
    <?php
      $resource = opendir("upload/zip");
      while (($entry = readdir($resource)) !== false){
        if($entry != "." && $entry != ".."){
        echo '<a href="/upload/zip/'.$entry.'">'.$entry.'</a><br>';
        }
      }
    ?>
<?php require('footer.php'); ?>
