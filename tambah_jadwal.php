<?php
error_reporting(0);
// include "tampilkan_datalat7.php";
// include "edit_data.php";

 // $data_edit = mysqli_fetch_assoc($proses_ambil);
?>

<!doctype html>
<html lang="en">
  <head>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="style/style.css">

    <title>FeelingGood :: Kesehatan Mental</title>
  </head>
  <body>
       <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(189, 245, 225);">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="gambar/logo3.png" alt="FeelingGood" width="100" height="50" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--<form class="d-flex"> -->

       <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav- item nav-link active" aria-current="page" href="http://localhost/feelingood/img-ngobar/img/home.php">Home</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Layanan</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/feelingood/img-ngobar/img/tespsikologis.php">Tes Psikologis</a></li>
                <li><a class="dropdown-item" href="http://localhost/feelingood/img-ngobar/img/survey.php">Survey</a></li>
                <li><a class="dropdown-item" href="http://localhost/feelingood/img-ngobar/img/harga.php">Harga</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Konsultasi</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/feelingood/img-ngobar/img/jadwalper.php">Jadwal Pertemuan</a></li>
                <li><a class="dropdown-item" href="http://localhost/feelingood/img-ngobar/img/riwayat_pasien.php">Riwayat Pasien</a></li>
                <li><a class="dropdown-item" href="http://localhost/feelingood/img-ngobar/img/komentar.php">Online Chat</a></li>
              </ul>
            </li>
            <a class="nav- item nav-link" href="tentangkami.html">Tentang Kami</a>
            <a class="btn btn-primary tombol" href="http://localhost/feelingood/img-ngobar/img/login.php">Sign Out</a> 
           <!--</form> -->
          </div>
        </div>
      </div>
    
    </nav>
    <!-- Akhir Navbar -->
    <br>
    <h2 align="center"> Tambah Konsultasi Jadwal Pertemuan </h2>
    <div class="container" style="margin-top: 50px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA JADWAL KONSULTASI
            </div>
            <div class="card-body">
              <form action="simpan_jadwal.php" method="POST">
                
                <div class="form-group">
                  <label>No Pengguna</label>
                  <input type="text" name="no_pengguna" placeholder="Masukkan Nomor Pengguna" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Pengguna</label>
                  <input type="text" name="nama_pengguna" placeholder="Masukkan Nama Pengguna" class="form-control">
                </div>

                <div class="form-group">
                  <label>No Whatsapp</label>
                  <input type="text" name="no_wa" placeholder="Masukkan Nomor Whatsapp pengguna" class="form-control">
                </div>

                <div class="form-group">
                  <label>ID Psikolog</label>
                  <input type="text" name="id_psikolog" placeholder="Masukkan Nomor Pengguna" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Psikolog</label>
                  <input type="text" name="nama_psikolog" placeholder="Masukkan Nama Pengguna" class="form-control">
                </div>

                <div class="form-group">
                  <label>No Telp Psikolog</label>
                  <input type="text" name="no_telp_psikolog" placeholder="Masukkan Nomor Telpon Psikolog" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jadwal Pertemuan</label>
                  <input type="date" name="jadwal" placeholder="Masukkan Tanggal" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <button class="btn btn-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>  KEMBALI</button></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    

<!-- footer
<div class="row footer" ><!--style="background-color:#f3b557;"
<div class="col text-center">
  <p> &copy; 2021 All Rights Reserved by SitaAlden 4E-TI. </p>
</div>
</div>  -->


<!-- Akhir footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>