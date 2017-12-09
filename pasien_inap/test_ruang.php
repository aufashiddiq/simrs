
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
$sql = "SELECT id_ruang, nama_ruang, jenis_ruang FROM ruang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id ruang: ". $row["id_ruang"]. " - Nama ruang: ". $row["nama_ruang"]." jenis ruangan: ". $row["jenis_ruang"] ;
    }
} else {
    echo "0 results";
}
}

$conn->close();
?> 