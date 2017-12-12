<h2>Input Ruangan</h2>
<br>
<br>
<div class="col-md-8">
    <form name="form" method="post">
        <div class="form-group">
            <!-- <form action="" method="post" select name="jenisRuangan" id="jenisRuangan" class="form-control" placeholder="Jenis Ruangan" tabindex="3"> -->
    
	<form action="" method="post"><select name="jenis_ruangan" class="form-control">   
	<option value="">Silahkan Pilih</option>
	<option value="Mawar">Ruang Mawar</option>  
	<option value="Melati">Ruang Melati</option>  
	<option value="Anggrek">Ruang Anggrek</option>  
	<option value="Bugenvil">Ruang Bugenvil</option>  
	</select>   
    </div>
	
	<div class="form-group">
            <input type="text" name="nomorRuangan" id="nomorRuangan" class="form-control" placeholder="Nomor Ruangan" tabindex="3">
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

if(isset($_POST['idPasien']))
{
    $url = 'http://localhost/api/poli/tambah';
    
    if($_POST['idPoli'] !== "")
    {
        $data['idPoli']   = $_POST['idPoli'];    
    }

    $data['idPasien']   = $_POST['idPasien'];
    $data['keluhan']    = $_POST['keluhan'];
    $data['jenisPoli']  = $_POST['jenisPoli'];
    $data['status']     = $_POST['status'];
    $data['penyakit']   = $_POST['penyakit'];
    $data['catatanMedisPoli']  = $_POST['catatanMedisPoli'];

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
    
}
?>
