<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama_pasien          = $_POST['nama_pasien'];
$username             = $_POST['username'];
$no_wa                = $_POST['no_wa'];
$id_psikolog          = $_POST['id_psikolog'];
$nama_psikolog        = $_POST['nama_psikolog'];
$catatan              = $_POST['catatan'];

//query insert data ke dalam database
$query = "INSERT INTO pasien (nama_pasien, username, no_wa, id_psikolog, nama_psikolog, catatan ) VALUES (
     '$nama_pasien', '$username', '$no_wa', '$id_psikolog', '$nama_psikolog', '$catatan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: http://localhost/feelingood/img-ngobar/img/riwayat_pasien.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>