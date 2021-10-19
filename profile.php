<?php
  session_start();
  // echo "ini halaman profil ".$_COOKIE['nama_user'];
  if(isset($_SESSION['nama_user'])){
    echo "ini halaman profil ".$_SESSION['nama_user']."<br>";
    // echo "<a href=$url>$situs</a>";
    echo "<a href=logout.php>Logout</a>";
    // echo "<a href="https://erudisi.com">Situsku</a>"
  }
  else{
    echo "Login dulu gan<br>";
    echo "<a href=login.php>Login</a>";
  }
 ?>
 <br>
