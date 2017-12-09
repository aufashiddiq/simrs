<?php
    if(isset($_GET['idObat'])){
    	$data  = file_get_contents('http://192.168.43.64/api/obat?idObat='.$_GET['idObat']);
        $array = json_decode($data, true);
        $data  = $array['data'];
    }	

		if(isset($_POST['kodeObat']))
		{
			if($_POST['idObat']!=""){
				$url = 'http://192.168.43.64/api/obat/edit';
				$data['idObat']=$_POST['idObat'];
			}else{
				$url = 'http://192.168.43.64/api/obat/tambah';
			}	
			
			if($_POST['kodeObat'] !== "")
			{
				$data['kodeObat']   = $_POST['kodeObat'];    
			}

			$data['namaObat']   = $_POST['namaObat'];
			$data['hargaObat']   = $_POST['hargaObat'];

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
			<input name="idObat" type="hidden" value="<?php if(isset($_GET['idObat'])) echo $_GET['idObat']; ?>">
		</div>
		<div class="form-group">
			<label>Kode Obat</label>
			<input name="kodeObat" type="text" class="form-control" 
			value="<?php if(isset($_GET['idObat'])) echo $data['kodeObat']; ?>">
		</div>
		<div class="form-group">
			<label>Nama Obat</label>
			<input name="namaObat" type="text" class="form-control" 
			value="<?php if(isset($_GET['idObat'])) echo $data['namaObat']; ?>">
		</div>
		<div class="form-group">
			<label>Harga Obat</label>
			<input name="hargaObat" type="text" class="form-control" 
			value="<?php if(isset($_GET['idObat'])) echo $data['hargaObat']; ?>">
		</div>
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info"
			value="<?php if(isset($_GET['idObat'])){ echo 'Update'; }else{ echo 'Simpan';} ?>">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>