<h2>Pendaftaran</h2>
<br>
<?php
    $data  = file_get_contents('http://'.IP.'/pasien?idPasien='.$_GET['idPasien']);
    $array = json_decode($data, true);
	$data  = $array['data'];
	?>
    
<div class="col-md-8">
	<form action="#" method="post">
		<div class="form-group">
			<label>Nomor Rekam Medik</label>
			<input name="nomorRekamMedik" type="text" class="form-control" value="<?php echo $data['nomorRekamMedik']; ?>">
		</div>
		<div class="form-group">
			<label>Nama Pasien</label>
			<input name="namaPasien" type="text" class="form-control" value="<?php echo $data['namaPasien']; ?>">
		</div>
		<div class="form-group">
			<label>Tgl Lahir Pasien</label>
			<input name="tglLahir" type="text" class="form-control" placeholder="dd-mm-yyyy"  value="<?php echo $data['tglLahirPasien']; ?>">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin Pasien</label>
			<input name="jenisKelamin" type="text" class="form-control" placeholder="Laki-laki/Perempuan"  value="<?php echo $data['jenisKelaminPasien']; ?>">
		</div>
        <div class="form-group">
			<label>Alamat Pasien</label>
			<input name="alamatPasien" type="text" class="form-control"  value="<?php echo $data['alamatPasien']; ?>">
		</div>
        <div class="form-group">
			<label>Agama Pasien</label>
			<input name="agamaPasien" type="text" class="form-control"  value="<?php echo $data['agamaPasien']; ?>">
		</div>	
        <div class="form-group">
			<label>Keterangan Pasien</label>
			<input name="keteranganPasien" type="text" class="form-control"  value="<?php echo $data['keteranganPasien']; ?>">
		</div>
        <div class="form-group">
			<label>Dalam Perawatan</label>
			<input name="dalamPerawatan" type="text" class="form-control"  value="<?php echo $data['dalamPerawatan']; ?>">
		</div>
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>


	<?php
            
		if(isset($_POST['namaPasien'])) {
			$url = 'http://'.IP.'/pasien/sign-up';
			
			$dataEdit['idPasien'] = $_GET['idPasien'];
			$dataEdit['nomorRekamMedik'] = $_POST['nomorRekamMedik'];
			$dataEdit['namaPasien']   = $_POST['namaPasien'];
			$dataEdit['tglLahirPasien']    = $_POST['tglLahir'];
			$dataEdit['jenisKelaminPasien']  = $_POST['jenisKelamin'];
			$dataEdit['alamatPasien']     = $_POST['alamatPasien'];
			$dataEdit['agamaPasien']   = $_POST['agamaPasien'];
			$dataEdit['keteranganPasien']  = $_POST['keteranganPasien'];
			$dataEdit['dalamPerawatan'] = $_POST['dalamPerawatan'];

			// use key 'http' even if you send the request to https://...
			$options = array(
				'http' => array(
					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
					'method'  => 'POST',
					'content' => http_build_query($dataEdit)
				)
			);
			
			$context  = stream_context_create($options);
			
			$result = file_get_contents($url, false, $context);
			if ($result === FALSE) { /* Handle error */ }
			
			echo $result;
			header("location:index.php?page=daftar-pasien");
		}
	?>


</div>

