<?php
$connection = mysqli_connect("localhost","root","","db_feelinggood");
if (!$connection) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?>