<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Keuangan Apps</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="icon" type="image/png" href="gambar/sistem/iconapp.png">
</head>

<body class="bg-primary">
  <div class="container">
    <div class="login-box">
      <center>
        <h3><b>SISTEM KEUANGAN<br> TOKO SEMBAKO BUNDA LAXANA</b></h3>
        <br />

        <?php
        if (isset($_GET['alert'])) {
          if ($_GET['alert'] == "gagal") {
            echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
          } else if ($_GET['alert'] == "logout") {
            echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
          } else if ($_GET['alert'] == "belum_login") {
            echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
          }
        }
        ?>
      </center>

      <div class="login-box-body">

        <div class="text-center"> <img src="gambar/sistem/icon.png" width="300" height="150">
          <center>
          <span style="color: Black;">
              <h4><B>Silahkan Login</B></h4>
          </span>
          <span style="color: green;">
              <h5>Masukkan User & Password Anda !</h5>
          </span>
          </center>
          <form action="periksa_login.php" method="POST">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="Username" name="username" required="required" autocomplete="off">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Password" name="password" required="required" autocomplete="off">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-offset-8 col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

    <span style="color: white;">
      <center>
        <h5>copyright 2023 Sistem Keuangan Toko Sembako Bunda Laxana</h5>
      </center>
    </span></p>

    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>