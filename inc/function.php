<?php

  if( isset($_POST['submit']) ){
    $unik_f = md5(date('Y-m-d H:i:s:u'));
    $nama_f = $_FILES['file']['name'];
    $lokasi_f = $_FILES['file']['tmp_name'];
    $size_f = $_FILES['file']['size'];
    $type_f = $_FILES['file']['type'];
    $error_f = $_FILES['file']['error'];
    $ubah_g = '../upload/img/' . $nama_f;
    $ubah_d = '../upload/doc/' . $nama_f;
    $ubah_z = '../upload/zip/' . $nama_f;
    $ubah_v = '../upload/vid/' . $nama_f;

    if($error_f == 0){
      if($size_f <= 100000000){

        switch ($type_f) {
          case 'image/jpeg':
            if(file_exists($ubah_g)){
              $ubah_g = str_replace(".jpg", "", $ubah_g);
              $ubah_g = $ubah_g . "_" . $unik_f . ".jpg";
              }
              move_uploaded_file($lokasi_f, $ubah_g);
              header('Location: ../gambar.php');
            break;
          case 'image/png':
            if(file_exists($ubah_g)){
              $ubah_g = str_replace(".png", "", $ubah_g);
              $ubah_g = $ubah_g . "_" . $unik_f . ".png";
              }
              move_uploaded_file($lokasi_f, $ubah_g);
              header('Location: ../gambar.php');
            break;
          case 'application/pdf':
            if(file_exists($ubah_d)){
              $ubah_d = str_replace(".pdf", "", $ubah_d);
              $ubah_d = $ubah_d . "_" . $unik_f . ".pdf";
              }
              move_uploaded_file($lokasi_f, $ubah_d);
              header('Location: ../doc.php');
            break;
          case 'application/octet-stream':
            if(file_exists($ubah_d)){
              $ubah_d = str_replace(".docx", "", $ubah_d);
              $ubah_d = $ubah_d . "_" . $unik_f . ".docx";
              }
              move_uploaded_file($lokasi_f, $ubah_d);
              header('Location: ../doc.php');
            break;
          case 'application/x-zip-compressed':
            if(file_exists($ubah_z)){
              $ubah_z = str_replace(".zip", "", $ubah_z);
              $ubah_z = $ubah_z . "_" . $unik_f . ".zip";
              }
              move_uploaded_file($lokasi_f, $ubah_z);
              header('Location: ../file.php');
            break;
          case 'video/x-matroska':
            if(file_exists($ubah_v)){
              $ubah_v = str_replace(".mkv", "", $ubah_v);
              $ubah_v = $ubah_v . "_" . $unik_f . ".mkv";
              }
              move_uploaded_file($lokasi_f, $ubah_v);
              header('Location: ../video.php');
            break;
          case 'video/mp4':
            if(file_exists($ubah_v)){
              $ubah_v = str_replace(".mp4", "", $ubah_v);
              $ubah_v = $ubah_v . "_" . $unik_f . ".mp4";
              }
              move_uploaded_file($lokasi_f, $ubah_v);
              header('Location: ../video.php');
            break;
          default:
            echo "Format tidak didukung";
      }

      } else {
        echo "Ukuran file terlalu besar";
      }
    } else {
      echo "Upload gagal";
    }
  }
 ?>
