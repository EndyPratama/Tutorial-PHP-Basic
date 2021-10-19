<!-- require jika error tidak menampilkan program di bawahnya -->
<!-- include jika error tetap menampilkan program di bawahnya -->
<!-- // implode(separator,array) -->
<!-- <?php include"header.php"; ?> -->
<?php require"header.php"; ?>
  <main>
    selamat datang di tutorial web saya.
    <h2>implode dan explode</h2>
    <!-- <?php
      $pekerjaan=["programmer","designer","manager"];
      echo implode(" ", $pekerjaan);
      echo "<br>";
      $pelajaran="html css javascript php";
      print_r(explode(" ",$pelajaran));
     ?> -->
    <h2>Fungsi Date</h2>
    <!-- <?php
      echo "Tanggal : ";
      echo (date('d - M - Y'));
     ?> -->
     <h2>Trim dan Strip</h2>
     <!-- <?php
      $text=" Ini adalah input user ";
      echo "sebelum".$text."disini";
      echo "<br>";
      echo "sesudah".trim($text)."disini";
      echo "<br>";
      echo "sesudah".ltrim($text)."disini";
      echo "<br>";
      echo "sesudah".rtrim($text)."disini";
      echo "<br>";
      $text2="<script>alert('Hallo Semuanya')</script>";
      echo ($text2);
      ?> -->
    <h2>Get dan Post</h2>
    <?php
      $user ="Endy";
      $pass="12345678";

      if(isset($_POST['submit'])){
        if ($_POST['nama']==$user && $_POST['password']==$pass) {
          echo "Login berhasil";
        }
        else{
          echo "Gagal Login";
        }
      }
     ?>
     <form action="" method="get">
       <input type="text" name="nama" >
       <input type="pass" name="password" >
       <input type="submit" name="submit" >
     </form>
  </main>

<?php require_once"footer.php"; ?>
