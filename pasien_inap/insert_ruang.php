<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$id_ruang = 2;
$nama_ruang = 'mawar';
$jenis_ruang = 'enjoy';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
	$sql = "INSERT INTO ruang (id_ruang, nama_ruang, jenis_ruang)
	VALUES ($id_ruang, '$nama_ruang', '$jenis_ruang')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>