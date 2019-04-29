<?php require('header.php'); ?>
<div class="mb-4"></div>
    <?php
      $resource = opendir("upload/doc");
      while (($entry = readdir($resource)) !== false){
        if($entry != "." && $entry != ".."){
          echo '<div class="garis-file"><img src="assets/images/doc.png" width="30px" class="mr-2 mb-1"><a href="/upload/doc/'.$entry.'">'.$entry.'</a></div><br>';
        }
      }
    ?>
<?php require('footer.php'); ?>
