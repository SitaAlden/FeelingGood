<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_jadwal             = $_POST['id_jadwal'];
$no                    = $_POST['no_pengguna'];
$nama_lengkap          = $_POST['nama_pengguna'];
$no_wa                 = $_POST['no_wa'];
$no_id                 = $_POST['id_psikolog'];
$nama_psikolog         = $_POST['nama_psikolog'];
$no_telp               = $_POST['no_telp_psikolog'];
$jadwal                = $_POST['jadwal'];

//query insert data ke dalam database
$query = "UPDATE jadwal_pertemuan SET no_pengguna='$no', nama_pengguna='$nama_lengkap', no_wa='$no_wa', 
id_psikolog='$no_id', nama_psikolog='$nama_psikolog', no_telp_psikolog='$no_telp', jadwal='$jadwal' WHERE id_jadwal = '$id_jadwal'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: http://localhost/feelingood/img-ngobar/img/jadwalper.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Diupdate!";

}

?>