<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$no                    = $_POST['no_pengguna'];
$nama_lengkap          = $_POST['nama_pengguna'];
$no_wa                 = $_POST['no_wa'];
$no_id                 = $_POST['id_psikolog'];
$nama_psikolog         = $_POST['nama_psikolog'];
$no_telp               = $_POST['no_telp_psikolog'];
$jadwal               = $_POST['jadwal'];

//query insert data ke dalam database
$query = "INSERT INTO jadwal_pertemuan (no_pengguna, nama_pengguna, no_wa, id_psikolog, nama_psikolog, no_telp_psikolog, jadwal ) VALUES (
    '$no', '$nama_lengkap', '$no_wa', '$no_id', '$nama_psikolog', '$no_telp', '$jadwal')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: http://localhost/feelingood/img-ngobar/img/jadwalper.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>