<?php
// session_start();

// if(!isset($_SESSION['level']) or $_SESSION['level'] != "poli") {
//     header("location:../index.php");
// }
?>

<!DOCTYPE html>
<html>
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SIM RS -ADMIN POLI KLINIK</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/index.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-ui.js"></script>

</head>
<body>
  <div id="navbar-header">
    <a href="" id="header-title">ADMIN POLI KLINIK</a>
  </div>

<br>
  <div class="col-md-2">           
    <div class="row" id="side-menu">
    <br><br><br>
    <ul class="nav nav-pills nav-stacked">
      <li><a href="home"><span class="glyphicon glyphicon-home"></span>  HOME</a></li><br>
      <li><a href="daftar-pasien"><span class="glyphicon glyphicon-user"></span>  Daftar Pasien</a></li><br>
      <li><a href="jenis-poli"><span class="glyphicon glyphicon-user"></span>  Jenis Poli</a></li><br>
      <li><a href="input-poli"><span class="glyphicon glyphicon-user"></span>  Input Poli</a></li><br>
      <li><a href="rekap-pasien"><span class="glyphicon glyphicon-user"></span>  Rekap Pasien</a></li><br>
      <li><a href="rekam-medik"><span class="glyphicon glyphicon-user"></span>  Rekam Medik</a></li><br>
      <li><a href="laporan-diagnosa"><span class="glyphicon glyphicon-user"></span>  Laporan Diagnosa</a></li><br><br><br>
      <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li><br>      
    </ul>
    </div>
  </div>

  <div class="col-md-10" id="content"><br><br>
      <?php include 'modul.php'; ?>
  </div>
</body>
</html>
