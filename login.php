<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KK POST</title>

    <!-- Bootstrap core CSS -->
    <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin2.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <br>
      <center>
      <div class="col-md-5 mr-auto mt-2" style="background-color: white; padding: 40px; border-radius: 25px;">
      <center>
        <div class="panel panel-default">
          <div class="panel-heading">
              <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span><img src="images/logo.png" width="120"></h3>
              <br>
              <h4>Sistem Login</h4>
              <p><span class="glyphicon glyphicon-road" aria-hidden="true"></span>
              <b>Autentikasi Login KK Post Test 4</b><br>Teknik Informatika - Universitas Ahmad Dahlan</p>
          </div>
        <div class="panel-body">
         <br>
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
            Masukkan Username dan Password !!!
            
        </div>
       
        <div class="col-md-11">
            <form action="" method="POST">
              <div class="input-group">
              <input type="text" name="user" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required="required">
              </div>

              <br>

              <div class="input-group">
              <input type="password" name="pass" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required="required">
              </div>

              <br>
              </div>
              <input name="flogin" type="submit" class="btn btn-block btn-primary" value="Login">
              </form>

              <?php 
              include "koneksi2.php";
              session_start();
              if(@$_SESSION['userweb'] != ""){
                header('location:index.php');
              }

              if(isset($_POST['flogin'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $q = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')");
                $cek = mysqli_num_rows($q);
                $data = mysqli_fetch_array($q);
                if ($cek < 1){
                  ?>
                    <br>
                    <div class="alert alert-danger">
                      Maaf Username atau Password Tidak Cocok !
                    </div>
                  <?php
                }
                else{
                      $_SESSION['userweb']=$user;
                      header('location:index.php');
                  }
                }
              ?> 

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
