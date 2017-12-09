
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
$sql = "SELECT id, nama, ruangan, tgl_msk, tgl_klr, biaya FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Nama: ". $row["nama"]." ruangan: ". $row["ruangan"]." tgl Masuk: ". $row["tgl_msk"]. " tgl Keluar: ". $row["tgl_klr"] ." biaya: ".$row["biaya"] ;
    }
} else {
    echo "0 results";
}
}

$conn->close();
?> 