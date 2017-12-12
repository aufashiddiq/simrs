<?php
session_start();

if(isset($_SESSION['level'])) {
    if($_SESSION['level'] == "poli") {
        header("location:poli/index.php");        
    } else if($_SESSION['level'] == "pendaftaran") {
        header("location:pendaftaran/index.php");        
    } else if($_SESSION['level'] == "kasir") {
        header("location:kasir/index.php");        
    } else if($_SESSION['level'] == "rawatinap") {
        header("location:rawatinap/index.php");        
    } else if($_SESSION['level'] == "apotek") {
        header("location:apotek/index.php");        
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIM-RS</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css" >
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="account-wall">
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="login">
                            <h2 class="text-center"><b>SIM RS</b></h2>
                            <h3 class="text-center">Lanud Sam Ratulangi</h3>
                            <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                            <form class="form-signin" action="" method="POST">
                                <input type="text" class="form-control" placeholder="Username" id="username" name = "username" required autofocus>
                                <input type="password" class="form-control" placeholder="Password" id ="password" name="password" required>
                                <input type="submit" class="btn btn-lg btn-default btn-block" value="Sign In" />
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['username']))
        {
            $url = 'http://sapipermaiga.000webhostapp.com/login';
            
            $data['username']   = $_POST['username'];
            $data['password']   = $_POST['password'];

            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            
            if ($result !== FALSE) { 
                $data = json_decode($result, true);
                if($data['status'] == true) {
                    if($data['data']['level'] == "poli") {
                        $_SESSION['level'] = "poli";
                        header("location:poli");
                    }else if($data['data']['level'] == "pendaftaran") {
                        $_SESSION['level'] = "pendaftaran";
                        header("location:pendaftaran");
                    }else if($data['data']['level'] == "apotek") {
                        $_SESSION['level'] = "apotek";
                        header("location:apotek");
                    }
                }
                echo "KOMBINASI SALAH";
            } else {
                echo "cek Koneksi";
            }
        }
    ?>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>