<?php 
if (isset($_GET['page'])) {
	$halaman=$_GET['page'];
	if($halaman=="home"){
		include("home.php");
	} else if($halaman=="rawat-inap"){
		include("rawat-inap.php");
	} else if($halaman=="jenis-ruangan"){
		include("jenis-ruangan.php");
	}else if($halaman=="daftar-ruangan"){
		include("daftar-ruangan.php");
	}else if($halaman=="input-ruangan"){
		include("input-ruangan.php");
	}else if($halaman=="rekam-medik"){
		include("rekam-medik.php");
	}else if($halaman=="rekap-rawat-inap"){
		include("rekap-rawat-inap.php");
	} else if($halaman=="logout"){
		session_destroy();
		header("location:../index.php");
	}
} else {
	include("home.php");
}

?>