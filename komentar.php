<html>
<head>
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

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider
    <link rel="stylesheet" href="demo.css"> --> 

    <!-- load jQuery and the plugin -->
    <style>
    .komentar {
    border: 1px solid #5cb85c;
    border-radius :4px;
    width: 500px;
    height: 300px;
    overflow: scroll;
}
</style>
    
    <script src="dist/js/jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script> 
    
    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
    
    <script type="text/javascript">
    x=0;
    $(document).ready(function(){
       $(".komentar").scroll(function(){
        $("span").text(x+=1);
       }); 
    });
    </script>
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
</div>
<br />
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
           <center> <h1><span class="glyphicon glyphicon-envelope"></span> Chat Online </h1>  </center>
        </div>
    </div>
</div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-success">
<div class="panel-body">
<center>
<div class="komentar">
<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt","r");
echo "<table border=0>";

while ($isi = fgets($fp,250))
{
$pisah = explode("|",$isi);
echo "<tr><td>$pisah[0], $pisah[1], $pisah[2]</td></tr>";
echo "<tr><td><font color=brown>$pisah[3]</font>, Bilang</td></tr>";
echo "<tr><td>$pisah[5]<hr/></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
}
echo "</table>"; 
?>

</div>
<p>Scrolled <span>0</span> times.</p>
</center><br/>
<center>
<form id="formku" method="post" action="proses.php" onsubmit="return formCheck(this);" >
<table style="font-style: oblique; font-weight: bold;">
<tr>
<td width="150">Nama</td>
<td width="30">:</td>
<td width="550"><input type="text" name="nama" size="30" class="form-control" minlength="3" placeholder="Nama Anda" required /></td>
</tr>
<tr>
<td width="150">Email</td>
<td width="30">:</td>
<td width="550"><input type="text" name="email" size="30" class="form-control" minlength="3" placeholder="Alamat Email" required-email /></td>
</tr>
<tr>
<td width="150">Komentar</td>
<td width="30">:</td>
<td width="550"><input type="text" name="komentar" size="30" class="form-control" minlength="3" placeholder="Komentar Anda" required /></td>
</tr>
<tr>
<td width="150"></td>
<td width="30"></td>
<td width="550">
<button type="submit" class="btn btn-info btn-sm">Kirim <span class="glyphicon glyphicon-send"></span></button>
<button type="reset" class="btn btn-warning btn-sm">batal <span class="glyphicon glyphicon-refresh"></span></button>
</td>
</tr>
</table>
</form>
</center>
</div>
</div>
</div>
<!-- footer -->
<div class="row footer" ><!--style="background-color:#f3b557;" >-->
<div class="col text-center">
  <p> &copy; 2021 All Rights Reserved by SitaAlden 4E-TI. </p>
</div>
</div>
<!-- Akhir footer -->
<script src="dist/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>