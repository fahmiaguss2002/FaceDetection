<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$server="localhost:3307";
$user="root";
$pass="";
$database_name="modul3_wad";

$koneksi= mysqli_connect($server,$user,$pass,$database_name);
if ($koneksi){
    echo "dapat terhubung";

}
else{
    echo "tidak terhubung";
}



// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
$koneksi ->close();
// 
?>