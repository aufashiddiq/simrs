<?php  
    if(isset($_POST['idObat'])){
        $url = ip.'/obat/keluar/tambah';
            $data['idObat']   = $_POST['idObat'];
            $data['idPasien']   = $_POST['idPasien'];
            //$data['jumlahObatKeluar']   = $_POST['jumlahObatMasuk'];
            $data['tglObatKeluar']   = $_POST['tglObatKeluar'];
            $data['hargaObatKeluar']   = $_POST['hargaObatKeluar'];
            $data['tglPembayaranObat']   = $_POST['tglPembayaranObat'];
            

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
<h2>Input Obat Pasien</h2>
<br>
<div class="col-md-8">
	<form action="#" method="post">
		<div class="form-group">
			<input name="user" type="hidden" value="<?php echo $_SESSION['username']; ?>">
		</div>
		<div class="form-group">
			<label>Nama Obat</label>
			<select style='margin:4px 0px 9px 0px' name="idObat" class='form-control'>
            <option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Obat &nbsp; &nbsp; - &nbsp; &nbsp;</option>
            <?php
                                $data  = file_get_contents(ip.'/obat/list');
                                $array = json_decode($data, true);
                                $data  = $array['data'];
                                // foreach ($data as $row): array_map('htmlentities', $row){
                               foreach($data as $row){
                            ?>
							<option value=<?php echo $row['idObat']?>><?php echo $row['namaObat']?></option>
                            <?php
                               }
                            ?>
            </select>
		</div>
		<div class="form-group">
			<label>Nama Pasien</label>
			<select style='margin:4px 0px 9px 0px' name="idPasien" class='form-control'>
            <option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Nama Pasien &nbsp; &nbsp; - &nbsp; &nbsp;</option>
            <?php
                                $data  = file_get_contents(ip.'/pasien/list');
                                $array = json_decode($data, true);
                                $data  = $array['data'];
                                // foreach ($data as $row): array_map('htmlentities', $row){
                               foreach($data as $row){
                            ?>
							<option value=<?php echo $row['idPasien']?>><?php echo $row['namaPasien']?></option>
                            <?php
                               }
                            ?>
            </select>
		</div>
		<div class="form-group">
			<label>Tgl Obat Keluar</label>
			<input name="tglObatKeluar" type="text" class="form-control" placeholder="dd-mm-yyyy">
		</div>
        <div class="form-group">
			<label>Harga Obat</label>
			<input name="hargaObatKeluar" type="text" class="form-control">
		</div>
        <div class="form-group">
			<label>Tgl Pembayaran Obat</label>
			<input name="tglPembayaranObat" type="text" class="form-control" placeholder="dd-mm-yyyy">
		</div>	
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>