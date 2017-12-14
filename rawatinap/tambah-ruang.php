<h2>Tambah Ruangan</h2>
<br>
<br>
<div class="col-md-8">
    <form name="form" method="post">
	
	<div class="form-group">
            <input type="text" name="jenisRuangan" id="jenisRuangan" class="form-control" placeholder="Jenis Ruangan" tabindex="3">
        </div>
		
        <div class="form-group">
            <input type="text" name="hargaRuangan" id="hargaRuangan" class="form-control" placeholder="Harga" tabindex="3">
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6"><input type="submit" value="Submit" a href="rekap_pasien.php" class="btn btn-primary btn-block" tabindex="7"></div>
        </div>
        
    </form>
</div>

<?php

if(isset($_POST['jenisRuangan']))
{
    $url = 'http://'.IP.'/ruangan/tambah';
    
    $data['jenisRuangan']   = $_POST['jenisRuangan'];
    $data['hargaRuangan']    = $_POST['hargaRuangan'];

    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    
    $context  = stream_context_create($options);
    
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) { /* Handle error */ }
    
    echo $result;
    header("location:index.php?page=jenis-ruangan");
}
?>
