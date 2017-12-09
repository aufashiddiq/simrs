<!-- modal input -->
<div id="data_material" class="modal fade">
	<div class="modal">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Material Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tambah_act.php" method="post">
					<div class="form-group">
						<label>Nama Barang</label>
						<input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang ..">
                        <br>
                        <label>Kategori</label>
                            <select style='margin:4px 0px 9px 0px' name="satuan" class='form-control'>
							<option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Kategori &nbsp; &nbsp; - &nbsp; &nbsp;</option>
                            <?php
                                $datas=mysql_query("select * from t_kategori;");
                                while($b=mysql_fetch_array($datas)){
                            ?>
							<option value=<?php echo $b['kode_kategori']?>><?php echo $b['kategori']?></option>
                            <?php
                                }
                            ?>
						</select>
                        <br>
                        <label>Harga Jual</label>
						<input name="harga_jual" type="text" class="form-control" placeholder="Harga Jual">
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
						<label>Nama Barang</label>
						    <select style='margin:4px 0px 9px 0px' name="satuan" class='form-control'>
							<option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Barang &nbsp; &nbsp; - &nbsp; &nbsp;</option>
                            <?php
                                $datas=mysql_query("select * from t_barang;");
                                while($b=mysql_fetch_array($datas)){
                            ?>
							<option value=<?php echo $b['kode_brg']?>><?php echo $b['nama_brg']?></option>
                            <?php
                                }
                            ?>
						    </select>
                        <label>Suplier</label>
                            <select style='margin:4px 0px 9px 0px' name="satuan" class='form-control'>
							<option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Supplier &nbsp; &nbsp; - &nbsp; &nbsp;</option>
                            <?php
                                $datas=mysql_query("select * from t_supplier;");
                                while($b=mysql_fetch_array($datas)){
                            ?>
							<option value=<?php echo $b['id_supplier']?>><?php echo $b['nama']?></option>
                            <?php
                                }
                            ?>
						    </select>
                        <label>Jumlah</label>
						<input name="jumlah_brg" type="text" class="form-control" placeholder="Jumlah">
                        <label>Satuan</label>
                            <select style='margin:4px 0px 9px 0px' name="satuan" class='form-control'>
							<option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih satuan &nbsp; &nbsp; - &nbsp; &nbsp;</option>
                            <?php
                                $datas=mysql_query("select * from t_satuan;");
                                while($b=mysql_fetch_array($datas)){
                            ?>
							<option value=<?php echo $b['id_satuan']?>><?php echo $b['satuan']?></option>
                            <?php
                                }
                            ?>
						    </select>
                        <label>Harga Beli</label>
						<input name="harga_beli" type="text" class="form-control" placeholder="harga_beli">
                        <br>
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