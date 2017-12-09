<?php 
if (isset($_GET['page'])) {
	$halaman=$_GET['page']; // Mengakses variable URL

	if($halaman=="home"){
		include("home.php");
	} else if($halaman=="daftar-pasien"){
		include("daftar-pasien.php");
	} else if($halaman=="jenis-poli"){
		include("jenis-poli.php");
	} else if($halaman=="input-poli"){
		include("input-poli.php");
	} else if($halaman=="rekap-pasien"){
		include("rekap-pasien.php");
	} else if($halaman=="rekam-medik"){
		include("rekam-medik.php");
	} else if($halaman=="laporan-diagnosa"){
		include("laporan-diagnosa.php");
	} else if($halaman=="logout"){
		session_destroy();
		header("location:../logout.php");
	} else {
		include("home.php");
	}
} else {
	include("home.php");
}

?>