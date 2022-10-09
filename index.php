<?php
  include "koneksi2.php";
  session_start();
  if(@$_SESSION['userweb'] == ""){
    header('location:login.php');
  }

  $query = mysqli_query($koneksi, "SELECT*FROM login WHERE username='$_SESSION[userweb]'");

  $q = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TOKO KELONTONG</title>

    <!-- Bootstrap core CSS -->
    <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin3.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <br>
      <center>
      <div class="col-md-5 mr-auto " style="background-color: white; padding: 40px; border-radius: 25px;">
      <center>
        <div class="panel panel-default">
          <div class="panel-heading">
              <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span><img src="images/logo.png" width="120"></h3>
              <br>
              <h4>SELAMAT DATANG</h4>
              <p><span class="glyphicon glyphicon-road" aria-hidden="true"></span>
              <b>Autentikasi Login KK Post Test 4</b><br>Teknik Informatika - Universitas Ahmad Dahlan</p>
          </div>
        <div class="panel-body">
         <br>
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
           <?php echo $q['nama_lengkap']; ?><p><b>- Anda Berhasil Login -</b></p>
            
        </div>

        <a href="keluar.php" class="btn btn-sm btn-danger">Keluar</a>
       



             </div>

        </div>
        <center>
</div>

      </div>

    </div> <!-- /container -->
 


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
