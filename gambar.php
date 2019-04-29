<?php require('header.php'); ?>
<div class="mb-4"></div>
<div class="img-post">
    <?php
      $resource = opendir("upload/img");
      while (($entry = readdir($resource)) !== false){
        if($entry != "." && $entry != ".."){
        echo '<a href="/tugaskuliah/upload/img/'.$entry.'"><img src="/tugaskuliah/upload/img/'.$entry.'"></a>';
        }
      }
    ?>
</div>
<?php require('footer.php'); ?>
