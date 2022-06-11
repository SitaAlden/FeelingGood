<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$no_pengguna           = $_POST['no_pengguna'];
$nama_lengkap          = $_POST['nama_lengkap'];
$jenis_kelamin         = $_POST['jenis_kelamin'];
$tanggal_lahir         = $_POST['tanggal_lahir'];
$no_wa                 = $_POST['no_wa'];
$email                 = $_POST['email'];
$password              = $_POST['password'];

//query insert data ke dalam database
$query = "INSERT INTO pengguna (no_pengguna, nama_lengkap, jenis_kelamin, tanggal_lahir, no_wa, email, password ) VALUES (
    '$no_pengguna', '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir', '$no_wa', '$email', '$password')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    //header("location: http://localhost/feelingood/img-ngobar/img/login.php");
    echo "<script>
    alert('Data Berhasil Disimpan');
    window.location.href='login.php';
    </script>";
} else {

    //pesan error gagal insert data
    echo "<script>alert('Data Gagal Disimpan');
			window.location.href='pendaftaran.php';
			</script>";

}

?>