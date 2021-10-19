<?php
// echo time();
  if (isset($_POST['submit'])) {
    // print_r($_FILES);//mengambil informasi
    $time = time();
    $nama = $_FILES['gambar']['name'];
    $error= $_FILES['gambar']['error'];
    $size = $_FILES['gambar']['size'];
    $loc  = $_FILES['gambar']['tmp_name'];
    $format  = $_FILES['gambar']['type'];
    $namafile = 'upload/'.$nama;

    $ex=pathinfo($nama,PATHINFO_EXTENSION);
    // die($ex);

    if ($error==0) {
      if ($size<1000000) {
        if ($ex=="jpg") {
          if (file_exists($namafile)) {
            $namafile = str_replace(".".$ex,"",$namafile);
            $namafile = $namafile."_".$time. ".jpg";
            // die($namafile);
          }
          // upload
          move_uploaded_file($loc,$namafile);
          echo "berhasil upload";
        }
        else {
          echo "format harus jpeg";
        }
      }
      else{
        echo "gambar terlalu besar";
      }
    }
    else{
      echo "ada error";
    }

  }
 ?>

 <form action="upload.php" method="post" enctype="multipart/form-data">
   <input type="file" name="gambar" value="">
   <input type="submit" name="submit" value="upload">
 </form>
