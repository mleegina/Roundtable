<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $varM = $_POST['1'];
// $varT = $_POST['2'];
// $varW = $_POST['3'];
// $varTh = $_POST['4'];
// $varF = $_POST['5'];


$var1 = implode(", ", $_POST['t1']);

$sql = "INSERT INTO availdates (id, dates)
VALUES ($_SESSION["usr_id"],'$var1')";
if(mysqli_query($conn, $sql)){
    readfile("success.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
