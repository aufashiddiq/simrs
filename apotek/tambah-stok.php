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
                <th>Nama Material</th>
                <th>jumlah</th>
                <th>Satuan</th>
                <th>Harga Beli</th>
                <th>Nama Supplier</th>
                <th>Tangal Masuk</th>
                <th class="text-center">Action</th> 
            </tr>
        </thead>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-center">
                        <a class='btn btn-info ' href="edit_user.php?id=<?php echo $b['kode_brg']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                        <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_kasir.php?username=<?php echo $b['kode_brg']; ?>' }" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Hapus</a>
                    </td>
                </tr>		          
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
				<form action="tambah_act.php" method="post">
					<div class="form-group">
						<label>Nama Obat</label>
						    <select style='margin:4px 0px 9px 0px' name="satuan" class='form-control'>
							<option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Obat &nbsp; &nbsp; - &nbsp; &nbsp;</option>
                            <?php
                               // $datas=mysql_query("select * from t_barang;");
                               // while($b=mysql_fetch_array($datas)){
                            ?>
							<!-- <option value=<?php //echo $b['kode_brg']?>><?php //echo $b['nama_brg']?></option> -->
                            <?php
                              //  }
                            ?>
						    </select>
                        
                        <label>Jumlah</label>
						<input name="jumlah_brg" type="text" class="form-control" placeholder="Jumlah">
                        
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