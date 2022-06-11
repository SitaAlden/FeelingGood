<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM jadwal_pertemuan WHERE id_jadwal = '$id'";

if($connection->query($query)) {
    header("location: http://localhost/feelingood/img-ngobar/img/jadwalper.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>