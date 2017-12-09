
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
                        <li class="list-group-item"><a href="#">HOME</a></li>
                        <li class="list-group-item"><a href="#">Pendaftaran</a></li>
                        <li class="list-group-item"><a href="#">Daftar Pasien</a></li>
                        <li class="list-group-item"><a href="#">Rekam Medik</a></li>
                        <li class="list-group-item"><a href="#">Logout</a></li>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, User <b class="caret"></b></a>
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
                                  <li><a href="admin_kasir.html">HOME</a></li>
                                  <li><a href="Pasien_rawat_inap.php">Pasien Rawat Inap</a></li>
                                  <li><a href="#">Pasien Rawat Jalan</a></li>
                                  <li><a href="Rekap_pembayaran.php">Rekap Pembayaran</a></li>
                                  <li><a href="#">Logout</a></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                      <div align="center">
                        <h3><b>Selamat Datang di Halaman Kasir</b></h3>
                      </div>

                      <br>
                      <br>
                      <table class="table table-dark">
                        <thead>
                          <tr>

                            <th scope="col">ID Pasien</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Ruangan</th>
                            <th scope="col">Tgl Masuk</th>
                            <th scope="col">Tgl Keluar</th>
                            <th scope="col">Biaya</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          //--------------------------------------------- Arinal COde
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "test";

                          // Create connection

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 
                            else {
                            $sql = "SELECT id, nama, ruangan, tgl_msk, tgl_klr, biaya FROM test";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                  $shop = array(array("1"=>$row["id"], "2"=>$row["nama"] , "3"=>$row["ruangan"], "4"=>$row["tgl_msk"], "5"=>$row["tgl_klr"], "6"=>$row["biaya"]));
                                  if (count($shop) > 0):
                                    foreach ($shop as $row): array_map('htmlentities', $row); ?>
                                        <tr>
                                        <td><?php echo implode('</td><td>', $row); ?></td>
                                        </tr>
                                  <?php
                                    endforeach; 
                                  endif;

                                    //echo "<br> id: ". $row["id"]. " - Nama: ". $row["nama"]." ruangan: ". $row["ruangan"]." tgl Masuk: ". $row["tgl_msk"]. " tgl Keluar: ". $row["tgl_klr"] ." biaya: ".$row["biaya"] ;
                                }
                            } else {
                                echo "0 results";
                            }
                          }

                            //--------------------------------------------Arinal COde
                                //$shop = array(array("1"=>"a", "2"=>"b" , "3"=>"c", "4"=>"a", "5"=>"b"));
                                ?>
                          <?php if (count($shop) > 0): ?>
                                <?php foreach ($shop as $row): array_map('htmlentities', $row); ?>
                              <tr>
                                <td><?php echo implode('</td><td>', $row); ?></td>
                              </tr>
                              <?php endforeach; ?>


                          <?php endif; ?>
                        </tbody>

                        </table>

________________________________________________________________________________________________
Input Baru <br>
<form action="http://localhost/simrshtml/save_pasien_rawat.php" method="get">
<table class="table table-dark">
                        <thead>
                          <tr>

                            <th scope="col">ID Pasien</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Ruangan</th>
                            <th scope="col">Tgl Masuk</th>
                            <th scope="col">Tgl Keluar</th>
                            <th scope="col">Biaya</th>

                          </tr>
                        </thead>
                        <tbody>
                          <td scope="col"><input type="text" name="id" size="5"></td>
                          <td scope="col"><input type="text" name="nama" size="5"></td>
                          <td scope="col"><input type="text" name="ruang" size="5"></td>
                          <td scope="col"><input type="date" name="tgl_msk" size="5"></td>
                          <td scope="col"><input type="date" name="tgl_klr" size="5"></td>
                          <td scope="col"><input type="text" name="biaya" size="5"></td>
                        </tbody>
                      </table>
                      <input type="submit" name="submit" >
</form>
________________________________________________________________________________________________

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
