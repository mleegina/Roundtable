<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orders";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$varName = $_POST['name'];
$varToken = $_POST['token'];
$varDrink = implode(", ", $_POST['t1']);
$varInstructions = $_POST['instructions'];

$sql = "INSERT INTO bluebottle (name, token, drink, instructions)
VALUES ('$varName','$varToken','$varDrink', '$varInstructions')";
if(mysqli_query($conn, $sql)){
    readfile("pages/success.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
