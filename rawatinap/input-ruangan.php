<h2>Input Ruangan</h2>
<br>
<br>
<div class="col-md-8">
    <form name="form" method="post">
    <div class="form-group">
        <label>Nama Pasien</label>
        <select style='margin:4px 0px 9px 0px' name="idRuangan" class='form-control'>
        <option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Jenis Ruangan &nbsp; &nbsp; - &nbsp; &nbsp;</option>
        <?php
            $data  = file_get_contents('http://'.IP.'/ruangan/list');
            $array = json_decode($data, true);
            $data  = $array['data'];
        ?>
        <?php if (count($data) > 0): ?>
            <?php foreach ($data as $row): array_map('htmlentities', $row); ?>
            <option value=<?php echo $row['idRuangan']; ?>><?php echo $row['jenisRuangan']; ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
        </select>
    </div>
	
	<div class="form-group">
            <input type="text" name="nomorRuangan" id="nomorRuangan" class="form-control" placeholder="Nomor Ruangan" tabindex="3">
        </div>
		
        <div class="form-group">
            <input type="text" name="statusRuangan" id="statusRuangan" class="form-control" placeholder="Status" tabindex="3">
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6"><input type="submit" value="Submit" a href="rekap_pasien.php" class="btn btn-primary btn-block" tabindex="7"></div>
        </div>
        
    </form>
</div>

<?php

if(isset($_POST['nomorRuangan']))
{
    $url = 'http://'.IP.'/no/ruangan/tambah';
    $data['idRuangan']   = $_POST['idRuangan'];
    $data['nomorRuangan']   = $_POST['nomorRuangan'];
    $data['statusRuangan']    = $_POST['statusRuangan'];

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
    header("location:index.php?page=daftar-ruangan");
}
?>
