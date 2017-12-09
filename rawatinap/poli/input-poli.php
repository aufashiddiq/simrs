<h2>Input Poli</h2>
<br>
<br>
<div class="col-md-8">
    <form name="form" method="post">
        <div class="form-group">
            <input type="text" name="idPoli" id="idPoli" class="form-control" placeholder="Id Poli" tabindex="3">
        </div>
        <div class="form-group">
            <input type="text" name="idPasien" id="idPasien" class="form-control" placeholder="Id Pasien" tabindex="3">
        </div>
        <div class="form-group">
            <input type="text" name="keluhan" id="keluhan" class="form-control" placeholder="Keluhan" tabindex="3">
        </div>
        <div class="form-group">
            <input type="text" name="jenisPoli" id="jenisPoli" class="form-control" placeholder="Jenis Poli" tabindex="3">
        </div>						
        <div class="form-group">
            <input type="text" name="status" id="status" class="form-control" placeholder="Status" tabindex="3">
        </div>
        <div class="form-group">
            <input type="text" name="penyakit" id="penyakit" class="form-control" placeholder="Penyakit" tabindex="3">
        </div>
        <div class="form-group">
            <input type="text" name="catatanMedisPoli" id="catatanMedisPoli" class="form-control" placeholder="Catatan Medis Poli" tabindex="3">
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
