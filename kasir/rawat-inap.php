<h2>Pasien Rawat Inap</h2>
<br>
<div class="col-md-8">
	<form action="#" method="post">
		<div class="form-group">
			<input name="user" type="hidden" value="<?php // echo $_SESSION['username']; ?>">
		</div>
		<div class="form-group">
			<label>Nama Pasien</label>
			<select style='margin:4px 0px 9px 0px' name="idPasien" class='form-control'>
            <option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Nama Pasien &nbsp; &nbsp; - &nbsp; &nbsp;</option>
            <?php
				$data  = file_get_contents('http://192.168.43.64/api/pasien/list');
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
			<label>Biaya Ruangan</label>
			<input name="biayaRuangan" type="text" class="form-control">
		</div>
        <div class="form-group">
			<label>Biaya Administrasi</label>
			<input name="biayaAdministrasi" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Biaya Dokter</label>
			<input name="biayaDokter" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Biaya Observasi</label>
			<input name="biayaObservasi" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Biaya Tindakan</label>
			<input name="biayaTindakan" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Biaya Ambulance</label>
			<input name="biayaAmbulance" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Biaya Visit Dokter</label>
			<input name="biayaVisitDokter" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Biaya Visit Spesialis</label>
			<input name="biayaVisitSpesialis" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Biaya Perawatan</label>
			<input name="biayaPerawatan" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Biaya Laboratorium</label>
			<input name="biayaLaboratorium" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Biaya Lain</label>
			<input name="biayaLain" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label>Total Biaya</label>
			<input name="totalBiaya" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>
<?php
            
		if(isset($_POST['idPasien']))
		{
			$url = 'http://192.168.43.64/api/biaya/tambah';
			
			$data['idPasien']   = $_POST['idPasien'];
			$data['biayaRuangan']   = $_POST['biayaRuangan'];
			$data['biayaAdministrasi']    = $_POST['biayaAdministrasi'];
			$data['biayaDokter']  = $_POST['biayaDokter'];
			$data['biayaObservasi']     = $_POST['biayaObservasi'];
			$data['biayaTindakan']   = $_POST['biayaTindakan'];
			$data['biayaAmbulance']  = $_POST['biayaAmbulance'];
			$data['biayaVisitDokter'] = $_POST['biayaVisitDokter'];
			$data['biayaVisitSpesialis'] = $_POST['biayaVisitSpesialis'];
			$data['biayaPerawatan'] = $_POST['biayaPerawatan'];
			$data['biayaLaboratorium'] = $_POST['biayaLaboratorium'];
			$data['biayaLain'] = $_POST['biayaLain'];
			$data['totalBiaya'] = $_POST['totalBiaya'];

			
			$options = array(
				'http' => array(
					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
					'method'  => 'POST',
					'content' => http_build_query($data)
				)
			);
			
			$context  = stream_context_create($options);
			
			$result = file_get_contents($url, false, $context);
			if ($result === TRUE) { 
				echo 'Berhasil';
			}
		}
	?>