<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style/style2.css">

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
            <a class="btn btn-primary tombol" href="http://localhost/feelingood/img-ngobar/img/login.php">Sign In</a> 
           <!--</form> -->
          </div>
        </div>
      </div>
    
    </nav>
    <!-- Akhir Navbar -->
    <div class="card-body">
              <form action="simpan_daftar.php" method="POST">

      <h1 align="center"> Pendaftaran </h1><br>
      <p><center><img src ="gambar/linedaftar.png" align="middle" ></center></p>
      <br>
      <form action=" " method="POST">
      <div class="row g-2">
        <div class="col-md">
            <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" name="nama_lengkap" placeholder="Nama Lengkap" value="Masukkan Nama Lengkap Anda">
            <label for="floatingInputGrid">Nama Lengkap</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" name="no_wa" placeholder="No WhatsApp" value="Masukkan No WhatsApp Anda">
            <label for="floatingInputGrid">No WhatsApp</label>
            </div>
        </div>
        <br>
        <div class="row g-2">
        <div class="col-md">
        <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" name="jenis_kelamin" aria-label="Floating label select example">
                <option selected>Masukkan Jenis Kelamin</option>
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
            </select>
            <label for="floatingSelectGrid">Jenis Kelamin</label>
            </div>
        </div>
        <div class="col-md">
        <div class="form-floating">
            <input type="date" class="form-control" id="floatingInputGrid" name="tanggal_lahir" placeholder="Tanggal Lahir" value="Masukkan Tanggal Lahir">
            <label for="floatingInputGrid">Tanggal Lahir</label>
            </div>
        </div>
        <br>

        <div class="row g-2">
        <div class="col-md">
            <div class="form-floating">
            <input type="email" class="form-control" id="floatingInputGrid" name="email" placeholder="Alamat Email" value="Masukkan alamat Email">
            <label for="floatingInputGrid">Alamat Email</label>
            </div>
        </div>
        <div class="col-md">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" name="password" placeholder="Password" value="Buat password min (8 karakter)">
            <label for="floatingInputGrid">Kata Sandi</label>
            </div>
        </div>
        </div>
        <div class="col-md svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
        </svg> Harap Isi Data Diri Dengan Benar <br> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
        </svg> Registrasi Akun FeelingGood diperlukan untuk memilih jadwal Konsultasi 
        </div>
        <br>
        <div class="col-md svg">
        <button type="submit" class="btn btn-success">DAFTAR</button>
        <button type="reset" class="btn btn-warning">CANCEL</button> 
        </div>
    </form>

    

    <!-- Akhir Jumbotron -->
<!-- footer -->
<div class="row footer" ><!--style="background-color:#f3b557;" >-->
<div class="col text-center">
  <p> &copy; 2021 All Rights Reserved by SitaAlden 4E-TI. </p>
</div>
</div>



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