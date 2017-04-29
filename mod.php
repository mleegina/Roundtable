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
$varCrust = $_POST['crust'];
$varSauce = $_POST['sauce'];
$varToppings = implode(", ", $_POST['t1']);
$varInstructions = $_POST['instructions'];


$sql = "INSERT INTO modpizza (name, token, crust_type, sauce_type, toppings, instructions)
VALUES ('$varName','$varToken','$varCrust', '$varSauce', '$varToppings','$varInstructions')";
if(mysqli_query($conn, $sql)){
    readfile("pages/success.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
