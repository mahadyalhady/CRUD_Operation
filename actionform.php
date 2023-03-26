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

$fullname= $_POST['fullname'];
$dob= $_POST['dob'];
$email= $_POST['email'];
$mobnum= $_POST['mobnum'];
$gender= $_POST['gender'];
$occu= $_POST['occu'];

$sql = "INSERT INTO `form` (`fullname`, `dob`, `email`, `mobnum`, `gender`, `occu`)
VALUES ('$fullname', '$dob', '$email', '$mobnum', '$gender', '$occu')";

if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location: form.php");
