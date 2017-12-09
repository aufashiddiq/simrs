<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$id = $_GET["id"];
$nama = $_GET["nama"];
$ruang = 2;//$_GET["ruang"];
$tgl_klr = 2017-08-08;//$_GET["tgl_msk"];
$tgl_msk = 2017-09-09;//$_GET["tgl_klr"];
$biaya = 12;//$_GET["biaya"];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{

	$sql = "INSERT INTO test (id, nama, ruangan, tgl_msk, tgl_klr, biaya)
	VALUES ($id, '$nama', $ruang, '$tgl_msk', '$tgl_klr', $biaya)";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>