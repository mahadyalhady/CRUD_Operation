<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydb1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$name= $_POST['name'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$id=$_POST['id'];

$sql = "UPDATE `student_db` SET
`name`='$name',
`address`='$address',
`phone`='$phone'
WHERE `std_id`='$id' ";

$conn->query($sql);

$conn->close();
header("location: index.php")

?>