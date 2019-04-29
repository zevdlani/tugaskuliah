<?php require('header.php'); ?>
    <?php
      $resource = opendir("upload/img");
      while (($entry = readdir($resource)) !== false){
        if($entry != "." && $entry != ".."){
        echo '<a href="/upload/img/'.$entry.'"><img src="/upload/img/'.$entry.'"></a>';
        }
      }
    ?>
<?php require('footer.php'); ?>
