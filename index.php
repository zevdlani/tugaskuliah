<?php
  require_once "inc/core.php";

  if( isset($_SESSION['dat_user']) ){
    header('Location: dashboard');
  }
?>
<?php include ('header.php'); ?>
<div class="maindex">
    <div class="row">
      <div class="col-6 sm">
      </div>
      <div class="col-6 sm">
        <h1><a href="dashboard">Unggah</a></h1>
        <p>Tugas Kalian</p>
      </div>
    </div>
</div>
<?php include ('footer.php'); ?>
