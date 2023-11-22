<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mobil = $_POST['nama_mobil'];
    $brand_mobil = $_POST['brand_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $tipe_mobil = $_POST['tipe_mobil'];
    $harga_mobil = $_POST['harga_mobil'];

    $query = mysqli_query($koneksi, "INSERT INTO showroom_mobil(nama_mobil,brand_mobil,warna_mobil,tipe_mobil,harga_mobil)
                                    VALUES('$nama_mobil','$brand_mobil','$warna_mobil','$tipe_mobil','$harga_mobil')");

    if ($query) {
        echo "<script>alert('data telah di tambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1;url=home.php'>";
    } else {
        echo "<script>alert('gagal di tambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1;url=home.php'>";
    }

    mysqli_close($koneksi);
}
?>



