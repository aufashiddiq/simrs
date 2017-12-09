<?php 
include '../config/config.php';
function tbh_sup()
{
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$no_telp=$_POST['no_telp'];

	mysql_query("insert into t_supplier values('', '$nama','$alamat', '$no_telp')");
	header("location:supplier");
}
function hps_sup()
{
	$id=$_GET['id'];
	mysql_query("delete from t_supplier where id_supplier=$id");
	header("location:supplier");
}

function edt_sup()
{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$no_telp=$_POST['no_telp'];

	mysql_query("update t_supplier set nama='$nama', alamat='$alamat', no_telp='$no_telp' where id_supplier='$id'");
	header("location:supplier");
}

if (isset($_GET['aksi'])) {
	if($_GET['aksi']=='tbh_sup') {
		tbh_sup();
	} elseif ($_GET['aksi']=='hps_sup') {
		hps_sup();
	} elseif ($_GET['aksi']=='edt_sup') {
		edt_sup();
	}
}
 ?>