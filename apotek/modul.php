<?php 
if (isset($_GET['page'])) {
	$halaman=$_GET['page'];
	if($halaman=="home"){
		include("home.php");
	} else if($halaman=="daftar-obat"){
		include("daftar-obat.php");
	} else if($halaman=="obat"){
		include("obat.php");
	} else if($halaman=="insert-obat"){
		include("insert-obat.php");
	} else if($halaman=="input-obat"){
		include("input-obat.php");
	}else if($halaman=="tambah-stok"){
		include("tambah-stok.php");
	}else if($halaman=="input-obat-pasien"){
		include("input-obat-pasien.php");
	}else if($halaman=="rekap-obat-masuk"){
		include("rekap-obat-masuk.php");
	}else if($halaman=="rekap-obat-keluar"){
		include("rekap-obat-keluar.php");
	}else if($halaman=="rekap-penjualan"){
		include("rekap-penjualan.php");
	} else if($halaman=="logout"){
		session_destroy();
		header("location:../index.php");
	}
} else {
	include("home.php");
}

?>