<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

    <h1> Logika PHP </h1>
    <?php
      //------------------ Variable PHP --------------
        // $x = "Sekolah Koding";
        // $n123 = "Selamat Pagi";
        //
        //
        // echo "<h1>$n123</h1>";
        // echo "Hallo <br>";
        // echo "Member ". $x ."<br>";

      //------------------ Tipe data -----------------
      // String
        // $nama = "Sekolah Koding";
        // $nama2 = 'bermain Koding';
        //
        // echo $nama ." untuk ". $nama2;

      //----------------- int, float ------------------
        // $angka=100;
        // $angka1=500;
        // $angka2=5;
        //
        // $angka++;
        // echo "<br>"; echo $angka + $angka1;
        // $hasil = $angka + $angka1;
        // echo "<br>"; echo $hasil - $angka * $angka2;
        // $angka+=$angka1;
        // echo "<br>"; echo $angka; echo "<br>";

      //------------ operator matematic ---------------
        // $angka3=1.53;
        // echo round($angka3); echo "<br>";
        // echo "Angka hari ini adalah ".rand(1,10);
        // echo "<br>Angka terbesar adalah ".max(1,9,8,3,5);

      //--------------- Metode string ----------------------
        // $text="Hai semuanya...";
        // echo strlen($text); echo "<br>";
        // echo str_word_count($text);echo "<br>";
        // echo str_replace("semuanya","Endy",$text);echo "<br>";
        // echo str_repeat("wk",10);echo "<br>";
        // echo str_repeat(str_replace("semuanya","Endy",$text),3);

      //----------------- Array PHP -----------------------
        // $kotak = array('semut','kelinci','burung');
        // $kotak = array("Semut","Burung","Ikan","Ayam");
        // $nama = ['Endy','Fahmi','Jefri'];

        // print_r($kotak);
        // $i=0;
        // for($i=0;$i<=2;$i++){
        //   echo $kotak[$i];  echo "<br>";
        // }
        // $i=0;
        // for($i=0;$i<=2;$i++){
        //   echo $nama[$i];  echo "<br>";
        // }

      //--------------- metode array --------------------------
      // aray_unique, _reverse, shuffle, count, sort

        // print_r(array_unique($kotak));  echo "<br>";
        // print_r(array_reverse($kotak)); echo "<br>";
        // shuffle($kotak);
        // print_r($kotak); echo "<br>";
        // echo count($kotak); echo "<br>";
        // sort($nama);
        // print_r($nama); echo "<br>";
        // print_r(array_reverse($nama)); echo "<br>";

      //------------- Assosiative array -----------------------
        // $data=["nama"=> "Endy", "umur"=> 20, "kerja"=>"mahasiswa"];
        // $data1=["hobi"=> "olahraga", "laptop"=> "hp x360"];
        // print_r($data); echo "<br>";
        // echo "Namanya adalah ".$data["nama"]; echo "<br>";
        // echo "Umurnya adalah ".$data["umur"]; echo "<br>";
        // echo "Pekerjaannya adalah ".$data["kerja"]; echo "<br>";
        //
        // $data["nama"]="Endy Gigih Pratama";
        // echo "Namanya adalah ".$data["nama"]; echo "<br>";

      //-----------Metode Assosiatif array----------------
      //array_values, array_keys, array_merge
        // print_r(array_keys($data)); echo "<br>";
        // print_r( array_merge($data, $data1)); echo "<br>";


      //------------Multi dimensi array--------------
        // $data = array(
        //         array("programmer","21","olahraga"),
        //         array("konsultan","24","berbcara"),
        //         array("driver","25","catur"),
        // );
        //
        // print_r($data); echo "<br>";
        // echo $data[0][2];

      //----------------Loop PHP--------------------
        // $i=0;
        // for($i=0;$i<=5;$i++){
        //   echo $i;  echo "<br>";
        // }

      //-------------- Array Loop ---------------
      // $nama = ['Endy','Fahmi','Jefri'];
      // $i=0;
      // $n=count($nama);
      // for($i=0;$i<$n;$i++){
      //   echo "Nama ".($i+1)." adalah ".$nama[$i];  echo "<br>";
      // }
      // foreach($nama as $N){
      //   echo "------------------";
      //   echo $N;
      //   echo "------------------<br>";
      // }

      // $data=["nama"=>"Endy","umur"=>20];
      //
      // foreach($data as $key => $value){
      //   echo $key;
      //   echo $value."<br>";
      // }


    //------------- while & do while -----------
      // $i=0;
      // while($i<count($nama)){
      //   echo $nama[$i]."<br>";
      //   $i++;
      // }

      // do{
      //   echo "Masuk";
      //   echo $nama[$i]."<br>";
      //   $i++;
      // }while( $i < count($nama));

    //---------- Boolean ------------
      // $hasil = true;
      // $hasil2 = false;

    //----------= if and else =--------
    //operator logika (=,==,===, !=, <, > <=, >=)
      // $a = 100;
      // $b = 100;
      // $c = 200;
      // $d = '400';
      //
      // if($a===$b){
      //   echo "a = b<br>";
      //   if($a===$c && $b===$c){
      //     echo "a = b = c<br>";
      //   }
      //   elseif ($a*2===$c) {
      //     echo "a = b = 1/2 c<br>";
      //     if($c*2==$d || $c*2===$d){
      //       echo "c = 1/2 d<br>";
      //     }
      //     else{
      //       echo "c dan d berbeda tipe data";
      //     }
      //   }
      //   else{
      //     echo "a hanya cocok dengan b<br>";
      //   }
      // }

    //------------= switch case =----------
      // $nama="Endy";
      // switch($nama){
      //   case "Endy":
      //     echo "Hai Endy";
      //     break;
      //   case "Hilman":
      //     echo "Hai Hilman";
      //     break;
      //   default:
      //     echo "Tidak ada yang benar";
      // }

    //-------------= Fungsi =--------------
      // function print_text(){
      //   echo "----------";
      //   echo "Hai Endy";
      //   echo "----------";
      // }
      // print_text();

      // function print_text($text, $angka){
      //   $text = "sekolah " .$text." ".$angka;
      //   echo "----------";
      //   echo "$text";
      //   echo "----------";
      // }
      // function jarak(){
      //   echo "<br>";
      // }
      // print_text("Koding","1");
      // jarak();
      // print_text("Web","2");

    //----------= Return fungsi =--------
      // function menghitung($x,$y){
      //   $z=$x+$y;
      //   return $z;
      // }
      // $hasil = menghitung(2,4) *10;
      // echo "Hasil dari penjumlahan (2 + 4)*10 adalah ".$hasil;

    //--------------= Scope =---------------
      // $a=2;
      // $b=3;
      // function menghitung(){
      //   global $a,$b;
      //   $c=$a+$b;
      //   return $c;
      // }
      //echo "Hasil dari ".$a." + ".$b. " = ".menghitung();

    //-----------= anonymos function =---------------
      // $ngetik = function(){
      //   echo "Selamat datang<br>";
      // };
      // $ngetik();


    //------------= Call back =------------------
      // function berteriak($callback){
      //   echo "HAlooooooo<br>";
      //   $callback();
      // }
      // $panggil = function(){
      //   echo "SAya anonim";
      // };
      //
      // berteriak($panggil);

      // function berteriak($callback){
      //   echo "HAlooooooo<br>";
      //   call_user_func($callback,"Selamat datang");
      // }
      // $panggil = function($text){
      //   echo $text;
      // };
      //
      // berteriak($panggil);

      // function berteriak($callback){
      //   echo "HAlooooooo<br>";
      //   if(is_callable($callback)){
      //     call_user_func($callback,"Selamat datang");
      //   }
      //   else{
      //     echo "dia bukan fungsi";
      //   }
      // }
      //
      // $panggil = function($text){
      //   echo $text;
      // };
      //
      // berteriak(123);

    //------------------= Menampilkan error =------------
      // phpinfo();
      //cari config php.ini, cari display_error
      // echo "tampilkan<br>";

    //
      $car = ["Mobil","Motor"];
      var_dump($car); //melikat detail isi variable
      die();  //untuk memberhentikan program yang dibawahnya.
      echo "123";

    ?>

  </body>
</html>
