<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="icon" href="assets/images/iconbar.png">
    <title>TugasKuliah</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">TugasKuliah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="gambar">Gambar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doc">Dokumen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="file">File Zip</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="video">Video</a>
            </li>
		      </ul>
		      <div class="ml-auto">
		 	      <ul class="navbar-nav">
        			<?php if( !isset($_SESSION['dat_user']) ){ ?>
        			<li class="nav-item">
				        <a class="nav-link" href="login">Masuk</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="register"> Daftar</a>
				      </li><?php } ?>
				      <?php if( isset($_SESSION['dat_user']) ){ ?>
				      <li class="nav-item">
				        <a class="nav-link" href="inc/logout">Keluar</a>
				      </li><?php } ?>
			      </ul>
    	    </div>
	      </div>
   	  </div>
   	</nav>
   	<div class="container">
