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
    <h2 align="center"> Konsultasi Jadwal Pertemuan </h2>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA JADWAL PERTEMUAN
            </div>
            <div class="card-body">
              <a href="tambah_jadwal.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID JADWAL</th>
                    <th scope="col">NO PENGGUNA</th>
                    <th scope="col">NAMA PENGGUNA</th>
                    <th scope="col">NO WHATSAPP</th>
                    <th scope="col">ID PSIKOLOG</th>
                    <th scope="col">NAMA PSIKOLOG</th>
                    <th scope="col">NO TELP PSIKOLOG</th>
                    <th scope="col">JADWAL PERTEMUAN</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM jadwal_pertemuan");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['no_pengguna'] ?></td>
                      <td><?php echo $row['nama_pengguna'] ?></td>
                      <td><?php echo $row['no_wa'] ?></td>
                      <td><?php echo $row['id_psikolog'] ?></td>
                      <td><?php echo $row['nama_psikolog'] ?></td>
                      <td><?php echo $row['no_telp_psikolog'] ?></td>
                      <td><?php echo $row['jadwal'] ?></td>
                      <td class="text-center">
                        <a href="edit_jadwal.php?id=<?php echo $row['id_jadwal'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_jadwal.php?id=<?php echo $row['id_jadwal'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>

    

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