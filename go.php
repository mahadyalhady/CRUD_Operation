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

$sql = "INSERT INTO `student_db` (`name`, `address`, `phone`)
VALUES ('$name', '$address', '$phone')";

if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location: index.php");





// $name=$_POST['name'];
// $address=$_POST['address'];
// $phone=$_POST['phone'];

// echo $name;
// echo '<br>';
// echo $address;
// echo '<br>';
// echo $phone;
