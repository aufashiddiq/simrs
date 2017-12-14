<?php  
    if(isset($_POST['idObat'])){
        $url = ip.'/obat/masuk/tambah';
            $data['idObat']   = $_POST['idObat'];
            $data['jumlahObatMasuk']   = $_POST['jumlahObatMasuk'];
            $data['tglObatMasuk']   = $_POST['tglObatMasuk'];
            $data['hargaBeliObatMasuk']   = $_POST['hargaBeliObatMasuk'];

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
<div class="container-fluid">
        <div>
        
        <h2>Tambah Stok Obat</h2>
        
        <br>             
        <button style="margin-bottom:20px" data-toggle="modal" data-target="#data_stok" class="btn btn-success col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Stok</button> 
        
	    </div>
        <table class="table table-striped custab">
        <thead>  
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>jumlah Obat</th>
                <th>Harga Beli Obat Masul</th>
                <th>Tangal Masuk</th>
                <th class="text-center">Action</th> 
            </tr>
        </thead>
         <tbody>
               
                    <?php
                        $data  = file_get_contents(ip.'/daftar/obat/masuk');
                        $array = json_decode($data, true);
                        $data  = $array['data'];
                        //var_dump($data);
                        $no=1;
                        foreach ($data as $row): array_map('htmlentities', $row);
                    ?>
                     <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['namaObat']; ?></td>
                    <td><?php echo $row['jumlahObatMasuk']; ?></td>
                    <td><?php echo $row['hargaBeliObatMasuk']; ?></td>
                    <td><?php echo $row['tglObatMasuk']; ?></td>
                    <td class="text-center">
                        <a class='btn btn-info ' href="edit_user.php?id=<?php echo $b['kode_brg']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                        <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_kasir.php?username=<?php echo $b['kode_brg']; ?>' }" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Hapus</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>		          
        </table>
        </div>
<!-- modal input -->
<div id="data_stok" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Stok Baru</h4>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
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
                        
                        <label>Jumlah Obat</label>
						<input name="jumlahObatMasuk" type="text" class="form-control" placeholder="Jumlah">
                            <label>Tgl Obat Masuk</label>
                            <input name="tglObatMasuk" type="text" class="form-control" placeholder="dd-mm-yyyy">

            <label>Harga Beli Obat Masuk</label>
            <input name="hargaBeliObatMasuk" type="text" class="form-control">
                    </div>
				    <div class="modal-footer">
					    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					    <input type="submit" class="btn btn-primary" value="Simpan">
				    </div>
			    </form>
		    </div>
	    </div>
    </div>
</div>