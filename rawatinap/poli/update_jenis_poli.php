<?php 
include 'config.php';
$id_jenis_poli=$_POST['id_jenis_poli'];
$nama_poli=$_POST['nama_poli'];

mysql_query("update jenis_poli set id_jenis_poli='$id_jenis_poli', nama_poli='$nama_poli'");
header('location:jenis_poli.php');


?>