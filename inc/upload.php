<?php

  if( isset($_POST['submit']) ){
    $unik_f = md5(date('Y-m-d H:i:s:u'));
    $nama_f = $_FILES['file']['name'];
    $lokasi_f = $_FILES['file']['tmp_name'];
    $size_f = $_FILES['file']['size'];
    $type_f = $_FILES['file']['type'];
    $error_f = $_FILES['file']['error'];
    $format = pathinfo($nama_f, PATHINFO_EXTENSION);
    $ubah_g = '../upload/img/' . $nama_f;
    $ubah_d = '../upload/doc/' . $nama_f;
    $ubah_z = '../upload/zip/' . $nama_f;
    $ubah_v = '../upload/vid/' . $nama_f;
    $ubah_a = '../upload/apk/' . $nama_f;

    print_r($_FILES);
    if($error_f == 0){
      if($size_f <= 50000000){
        switch ($format) {
          case 'jpg':
            if(file_exists($ubah_g)){
              $ubah_g = str_replace(".jpg", "", $ubah_g);
              $ubah_g = $ubah_g . "_" . $unik_f . ".jpg";
              }
              move_uploaded_file($lokasi_f, $ubah_g);
              header('Location: ../gambar');
            break;
          case 'png':
            if(file_exists($ubah_g)){
              $ubah_g = str_replace(".png", "", $ubah_g);
              $ubah_g = $ubah_g . "_" . $unik_f . ".png";
              }
              move_uploaded_file($lokasi_f, $ubah_g);
              header('Location: ../gambar');
            break;
          case 'pdf':
            if(file_exists($ubah_d)){
              $ubah_d = str_replace(".pdf", "", $ubah_d);
              $ubah_d = $ubah_d . "_" . $unik_f . ".pdf";
              }
              move_uploaded_file($lokasi_f, $ubah_d);
              header('Location: ../doc');
            break;
          case 'docx':
            if(file_exists($ubah_d)){
              $ubah_d = str_replace(".docx", "", $ubah_d);
              $ubah_d = $ubah_d . "_" . $unik_f . ".docx";
              }
              move_uploaded_file($lokasi_f, $ubah_d);
              header('Location: ../doc');
            break;
          case 'zip':
            if(file_exists($ubah_z)){
              $ubah_z = str_replace(".zip", "", $ubah_z);
              $ubah_z = $ubah_z . "_" . $unik_f . ".zip";
              }
              move_uploaded_file($lokasi_f, $ubah_z);
              header('Location: ../file');
            break;
          case 'rar':
            if(file_exists($ubah_z)){
              $ubah_z = str_replace(".rar", "", $ubah_z);
              $ubah_z = $ubah_z . "_" . $unik_f . ".rar";
              }
              move_uploaded_file($lokasi_f, $ubah_z);
              header('Location: ../file');
            break;
          case 'mkv':
            if(file_exists($ubah_v)){
              $ubah_v = str_replace(".mkv", "", $ubah_v);
              $ubah_v = $ubah_v . "_" . $unik_f . ".mkv";
              }
              move_uploaded_file($lokasi_f, $ubah_v);
              header('Location: ../video');
            break;
          case 'mp4':
            if(file_exists($ubah_v)){
              $ubah_v = str_replace(".mp4", "", $ubah_v);
              $ubah_v = $ubah_v . "_" . $unik_f . ".mp4";
              }
              move_uploaded_file($lokasi_f, $ubah_v);
              header('Location: ../video');
            break;
            case 'apk':
              if(file_exists($ubah_a)){
                $ubah_a = str_replace(".apk", "", $ubah_a);
                $ubah_a = $ubah_a . "_" . $unik_f . ".apk";
                }
                move_uploaded_file($lokasi_f, $ubah_a);
                header('Location: ../apk');
            break;
          default:
            echo "Format file tidak didukung";
          }
      } else {
        echo "Ukuran file terlalu besar";
      }
    } else {
      echo "Gagal unggah";
    }
  }
?>
