<?php
  require_once "inc/core.php";

  if( isset($_SESSION['dat_user']) ){
    header('Location: dashboard');
  }
?>
<?php include ('header.php'); ?>
    <!-- Konten Utama -->
    <div class="maindex">
      <div class="row">
        <div class="col-6 sm">
        </div>
        <div class="col-6 sm">
          <h2> Tugas Kuliah</h2>
          <p>Upload Tugas Kalian</p>
        </div>
      </div>
    </div>
<?php include ('footer.php'); ?>
