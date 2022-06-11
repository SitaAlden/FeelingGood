<?php include 'koneksi.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="images/dk.png">
    <title>Dewan Komputer | Menampilkan data pada Popover</title>
    <link rel="stylesheet" href="bootstrap-4.0.0/js/src/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand text-white" href="index.php">
      Dewan Komputer
    </a>
  </nav>
 
  <div class="container">
    <h3 align="center" class="mt-3 mb-3">Menampilkan data dari database pada Popover Bootstrap</h3>
 
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th width="10%">No</th>
            <th width="90%">Name</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no=1;
            $query = "SELECT * FROM pengguna ORDER BY nama_lengkap ASC";
            $dewan1 = $db1->prepare($query);
            $dewan1->execute();
            $res1 = $dewan1->get_result();
            while ($row = $res1->fetch_assoc()) {
          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><a href="#" class="hover" id="<?php echo $row["id"]; ?>"><?php echo $row["nama_lengkap"]; ?></a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>  
    </div>  
  </div>
 
  <div class="bg-secondary p-2 text-white text-center">© <?php echo date('Y'); ?> Copyright:
      <a href="https://dewankomputer.com/"> Dewan Komputer</a>
  </div>
 
  <script>
    $(document).ready(function(){
       $('.hover').popover({
          title:fetchData,
          html:true,
          placement:'right',
          trigger:'hover'
       });
       function fetchData(){
          var ambil_data = '';
          var element = $(this);
          var id = element.attr("id");
          $.ajax({
             url:"ambil_data.php",
             method:"POST",
             async:false,
             data:{id:id},
             success:function(data){
                ambil_data = data;
             }
          });
          return ambil_data;
       }
    });
   </script>
</body>  
</html>