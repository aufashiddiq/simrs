<h2>Input Obat Pasien</h2>
<br>
<div class="col-md-8">
	<form action="#" method="post">
		<div class="form-group">
			<input name="user" type="hidden" value="<?php echo $_SESSION['username']; ?>">
		</div>
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
		</div>
		<div class="form-group">
			<label>Nama Pasien</label>
			<select style='margin:4px 0px 9px 0px' name="satuan" class='form-control'>
            <option value='0' selected>&nbsp; &nbsp; - &nbsp; &nbsp; Pilih Nama Pasien &nbsp; &nbsp; - &nbsp; &nbsp;</option>
            <?php
                // $datas=mysql_query("select * from t_barang;");
                // while($b=mysql_fetch_array($datas)){
            ?>
            <!-- <option value=<?php //echo $b['kode_brg']?>><?php //echo $b['nama_brg']?></option> -->
            <?php
                //  }
            ?>
            </select>
		</div>
        <div class="form-group">
			<label>Harga Obat</label>
			<input name="harga-obat" type="text" class="form-control">
		</div>
        <div class="form-group">
			<label>Tgl Pembayaran</label>
			<input name="tgl-pembayaran" type="text" class="form-control" placeholder="dd-mm-yyyy">
		</div>	
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>