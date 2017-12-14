<h2>Input Ruangan</h2>
<br>
<br>
<div class="col-md-8">
    <form name="form" method="post">
    <div class="form-group">
        <label>Nama Pasien</label>
        <select style='margin:4px 0px 9px 0px' name="idPasien" class='form-control'>
        <option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Nama Pasien &nbsp; &nbsp; - &nbsp; &nbsp;</option>
        <?php
            $data  = file_get_contents('http://'.IP.'/pasien/list');
            $array = json_decode($data, true);
            $data  = $array['data'];
        ?>
        <?php if (count($data) > 0): ?>
            <?php foreach ($data as $row): array_map('htmlentities', $row); ?>
            <option value=<?php echo $row['idPasien']; ?>><?php echo $row['namaPasien']; ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
        </select>
    </div>
	
	    <div class="form-group">
            <input type="text" name="tglMasuk" class="form-control" placeholder="Tanggal Masuk" tabindex="3">
        </div>
		
        <div class="form-group">
            <input type="text" name="tglKeluar" class="form-control" placeholder="Tanggal Keluar" tabindex="3">
        </div>

        <div class="form-group">
            <input type="text" name="idNomorRuangan" class="form-control" placeholder="Nomor Ruangan" tabindex="3">
        </div>
		
        <div class="form-group">
            <input type="text" name="catatanMedisRawatinap" class="form-control" placeholder="Catatan Medis" tabindex="3">
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6"><input type="submit" value="Submit" class="btn btn-primary btn-block" tabindex="7"></div>
        </div>
        
    </form>
</div>

<?php

if(isset($_POST['idPasien']))
{
    $url = 'http://'.IP.'/rawat/tambah';
    $data['idPasien']   = $_POST['idPasien'];
    $data['tglMasuk']   = $_POST['tglMasuk'];
    $data['tglKeluar']    = $_POST['tglKeluar'];
    $data['idNomorRuangan']    = $_POST['idNomorRuangan'];
    $data['catatanMedisRawatInap']    = $_POST['catatanMedisRawatInap'];

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
    header("location:index.php?page=rawat-inap");
}
?>
