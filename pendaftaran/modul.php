<?php 
if (isset($_GET['page'])) {
	$halaman=$_GET['page'];
	if($halaman=="home"){
		include("home.php");
	} else if($halaman=="pendaftaran"){
		include("pendaftaran.php");
	} else if($halaman=="daftar-pasien"){
		include("daftar-pasien.php");
	}else if($halaman=="edit-pasien"){
		include("edit-pasien.php");
	}else if($halaman=="rekam-medik"){
		include("rekam-medik.php");
	} else if($halaman=="logout"){
		session_destroy();
		header("location:../index.php");
	}
} else {
	include("home.php");
}

?>