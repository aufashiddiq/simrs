<?php
session_start();

if(!isset($_SESSION['level']) or $_SESSION['level'] != "apotek") {
    header("location:../index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SIM RS -ADMIN APOTIK</title>

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
    <a href="" id="header-title">ADMIN APOTIK</a>
  </div>

<br>
  <div class="col-md-2">           
    <div class="row panel" id="side-menu">
    <br><br><br>
    <ul class="nav nav-pills nav-stacked">
      <li><a href="home"><span class="glyphicon glyphicon-home"></span>  HOME</a></li><br>
      <li><a href="obat"><span class="glyphicon glyphicon-th-list"></span>  List Obat</a></li><br>
      <li><a href="insert-obat"><span class="glyphicon glyphicon-th-list"></span>  Tambah Obat Baru</a></li><br>
      <li><a href="daftar-obat"><span class="glyphicon glyphicon-th-list"></span>  Daftar Obat</a></li><br>
      <li><a href="input-obat"><span class="glyphicon glyphicon-th-list"></span>  Input Obat Baru</a></li><br>
      <li><a href="tambah-stok"><span class="glyphicon glyphicon-th-list"></span>  Tambah Stok</a></li><br>
      <li><a href="input-obat-pasien"><span class="glyphicon glyphicon-th-list"></span>  Input Obat Pasien</a></li><br>
      <li><a href="rekap-obat-masuk"><span class="glyphicon glyphicon-th-list"></span>  Rekap Obat Masuk</a></li><br>
      <li><a href="rekap-obat-keluar"><span class="glyphicon glyphicon-th-list"></span>  Rekap Obat Keluar</a></li><br>
      <li><a href="rekap-penjualan"><span class="glyphicon glyphicon-th-list"></span>  Rekap Penjualan</a></li><br>
      <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li><br>      
    </ul>
    </div>
  </div>

  <div class="col-md-10" id="content"><br><br>
      <?php include 'modul.php'; ?>
  </div>
</body>
</html>
