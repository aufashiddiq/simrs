<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>
<?php
include_once '../config/config.php';

?>
<div class="col-md-6 col-md-offset-3">
    <div class="container-fluid">
        <h3>Edit User</h3>
        <a class="btn" href="user"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
        <?php
        $id=mysql_real_escape_string($_GET['id']);
        $det=mysql_query("select * from t_users,t_customers where id_customers=id_users and id_users='$id'")or die(mysql_error());
        while($d=mysql_fetch_array($det)) {
        ?>                  
            <form action="update_kasir.php" method="post">
                <table class="table">
                    <tr>
                        <td></td>
                        <td><input type="hidden" name="id" value="<?php echo $d['id_users'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Kasir</td>
                        <td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td><input type="text" class="form-control" name="no_telp" value="<?php echo $d['no_telp'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" class="form-control" name="username" value="<?php echo $d['username'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control" name="password" value="<?php echo $d['password'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Tipe</td>
                        <td><input type="text" class="form-control" name="tipe" value="<?php echo $d['tipe'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Aktif?</td>
                        <td><select style='margin:4px 0px 9px 0px' name="aktif" class='form-control'>
                            <option value="<?php echo $d['aktif'] ?>" selected><?php echo $d['aktif'] ?></option>
                            <?php 
                                if($d['aktif']=='0'){?>
                                <option value='Y'>Y</option> 
                                <?php } 
                                else { ?>
                                    <option value='N'>N</option></td> 
                                    <?php
                                    }
                                ?>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-info" value="Simpan"></td>
                    </tr>
                </table>
            </form>
            <?php 
        }
        ?>
        </div>
    </div>
</body>
</html>
