<?php  
	if(isset($_POST['kodeObat']))
		{
			/*if($_POST['idObat']!=""){
				$url = 'http://192.168.43.64/api/daftar/obat/edit';
				$data['idObat']=$_POST['idObat'];
			}else{*/
				$url = ip.'/daftar/obat/tambah';
			//}	
			
			if($_POST['kodeObat'] !== "")
			{
				$data['kodeObat']   = $_POST['kodeObat'];    
			}

			$data['tglKadaluarsa']   = $_POST['tglKadaluarsa'];
			$data['jumlahObat']   = $_POST['jumlahObat'];
			$data['keteranganObat']   = $_POST['keteranganObat'];

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
<h2>Input Obat Baru</h2>
<br>
<div class="col-md-8">
	<form action="#" method="post">
		<div class="form-group">
			<input name="user" type="hidden" value="<?php echo $_SESSION['username']; ?>">
		</div>
		<div class="form-group">
			<label>Kode Obat</label>
			<select style='margin:4px 0px 9px 0px' name="kodeObat" class='form-control'>
            <option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Obat &nbsp; &nbsp; - &nbsp; &nbsp;</option>
                            <?php
                                $data  = file_get_contents(ip.'/obat/list');
                                $array = json_decode($data, true);
                                $data  = $array['data'];
                                // foreach ($data as $row): array_map('htmlentities', $row){
                               foreach($data as $row){
                            ?>
							<option value=<?php echo $row['kodeObat']?>><?php echo $row['kodeObat']?></option>
                            <?php
                               }
                            ?>
			</select>
		</div>
        <div class="form-group">
			<label>Tgl Kadaluarsa</label>
			<input name="tglKadaluarsa" type="text" class="form-control" placeholder="dd-mm-yyyy">
		</div>
        <div class="form-group">
			<label>Jumlah Obat</label>
			<input name="jumlahObat" type="text" class="form-control">
		</div>	
        <div class="form-group">
			<label>Keterangan Obat</label>
			<input name="keteranganObat" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>