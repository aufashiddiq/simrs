<?php 
if (isset($_GET['page'])) {
	$halaman=$_GET['page'];
	if($halaman=="home"){
		include("home.php");
	} else if($halaman=="rawat-jalan"){
		include("rawat-jalan.php");
	} else if($halaman=="rawat-inap"){
		include("rawat-inap.php");
	}else if($halaman=="rekap-pembayaran"){
		include("rekap-pembayaran.php");
	} else if($halaman=="logout"){
		session_destroy();
		header("location:../index.php");
	}
} else {
	include("home.php");
}

?>