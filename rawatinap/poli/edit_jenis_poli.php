<?php

session_start();

if(!isset($_SESSION['level']) or $_SESSION['level'] != "poli")
{
    header("location:../index.php");
}

?>

<!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Membuat Template Website Bootstrap</title>
      <link rel="stylesheet" href="style.css">
      <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   </head>
   <body>
     <div class="shoji" id="shoji">
    <div class="shoji-rail">
        <div class="shoji-panel shoji-panel-left">
            <div class="panel-group" id="sidebar">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#sidebar" href="#sidebar-first">Menu 1</a>
                        </h4>
                    </div>
                    <ul id="sidebar-first" class="list-group panel-collapse collapse">
                        <li class="list-group-item"><a href="index.php">HOME</a></li>
                        <li class="list-group-item"><a href="daftar_pasien.php">DAFTAR PASIEN</a></li>
                        <li class="list-group-item"><a href="jenis_poli.php">JENIS POLI</a></li>
                        <li class="list-group-item"><a href="input_poli.php">INPUT POLI</a></li>
						<li class="list-group-item"><a href="rekap_pasien.php">REKAP PASIEN</a></li>
						<li class="list-group-item"><a href="rekam_medik.php">REKAM MEDIK</a></li>
						<li class="list-group-item"><a href="laporan.php">LAPORAN DIAGNOSA</a></li>
                        <li class="list-group-item"><a href="../logout.php">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="shoji-panel shoji-panel-right">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Log off</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="shoji-door">
        <div class="content">
            <nav class="navbar navbar-default square" role="navigation" id="navbar">
                <div class="navbar-banner">
                    <a href="#" class="navbar-brand">RUMAH SAKIT TNI AU</a>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-left" data-slide="right">
                        <i class="glyphicon glyphicon-th-large"></i>
                    </button>
                    <button type="button" class="navbar-toggle navbar-toggle-right" data-slide="left">
                        <i class="glyphicon glyphicon-cog"></i>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, Admin Poli <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Log off</a></li>
                                <li class="divider" />
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="hidden-xs col-sm-3">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title" align="center">Menu</h4>
                                </div>
                                <ul class="nav nav-pills nav-stacked">
                        <li class="list-group-item"><a href="index.php">HOME</a></li>
                        <li class="list-group-item"><a href="daftar_pasien.php">DAFTAR PASIEN</a></li>
                        <li class="list-group-item"><a href="jenis_poli.php">JENIS POLI</a></li>
                        <li class="list-group-item"><a href="input_poli.php">INPUT POLI</a></li>
						<li class="list-group-item"><a href="rekap_pasien.php">REKAP PASIEN</a></li>
						<li class="list-group-item"><a href="rekam_medik.php">REKAM MEDIK</a></li>
						<li class="list-group-item"><a href="laporan.php">LAPORAN DIAGNOSA</a></li>
                        <li class="list-group-item"><a href="#">Logout</a></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                      <div align="center">
                        <h3><b>Selamat Datang di Halaman Edit Jenis Poli</b></h3>
                      </div>

                      <br>
                      <br>
					  <div class="form-group">
						<input type="text" name="id_jenis_poli" id="id_jenis_poli" class="form-control input-lg" placeholder="Id Jenis Poli" tabindex="3">
						</div>
                      <div class="form-group">
						<input type="text" name="nama_poli" id="nama_poli" class="form-control input-lg" placeholder="Nama Poli" tabindex="3">
						</div>

			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Simpan" a href="jenis_poli.php" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>

                </div>
            </div>
        </div>
    </div>
</div>

     <script src="script.js"></script>
     <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
     integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
     crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
     integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
     crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
     integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
     crossorigin="anonymous"></script> -->
   </body>
