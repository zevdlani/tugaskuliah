<?php require('header.php'); ?>
    <?php
      $resource = opendir("upload/doc");
      while (($entry = readdir($resource)) !== false){
        if($entry != "." && $entry != ".."){
        echo '<a href="/upload/doc/'.$entry.'">'.$entry.'</a><br>';
        }
      }
    ?>
<?php require('footer.php'); ?>
