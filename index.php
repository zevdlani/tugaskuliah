<?php include ('header.php'); ?>
    <!-- Konten Utama -->
    <div class="upload" id="upload">
      <form action="inc/function.php" method="post" enctype="multipart/form-data">
        <input class="btn btn-outline-secondary" type="file" name="file"><br>
        <input class="btn btn-secondary mt-3" type="submit" name="submit" value="Upload">
      </form>
    </div>
<?php include ('footer.php'); ?>
