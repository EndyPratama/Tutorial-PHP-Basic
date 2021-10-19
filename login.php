 <?php
   session_start();
   $user ="User";
   $pass="12345678";

   if( isset($_POST['submit']) ){
     if ($_POST['nama'] == $user && $_POST['password']==$pass) {
       $text="<script>alert('Hallo $user')</script>";
       echo ($text);

       //cookie
       //setcookie(key,nilai,expire)
       // setcookie('nama_user',$_POST['nama'],time()+120);

       $_SESSION['nama_user']=$_POST['nama'];

       // memindahkan halaman
       header('location: profile.php');
     }
     else{
       $text2="<script>alert('Maaf anda gagal login')</script>";
       echo ($text2);
     }
   }
  ?>
  <form action="" method="post">
    <input type="text" name="nama" >
    <input type="pass" name="password" >
    <input type="submit" name="submit" >
  </form>
 </main>
