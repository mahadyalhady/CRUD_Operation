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

$sql="SELECT * FROM `student_db`";

$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center" style="background-color: red; color: white; font-size: 50px; height: 70px; width: 100%;">My 1st CRUD Project</div>
    <br><br>
    <div align="center">
        <form action="go.php" method="POST">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="address" placeholder="address">
            <input type="text" name="phone" placeholder="phone">
            <input type="submit" name="submit" value="submit">
        </form>
    </div>

    <div align="center" style="padding-top: 50px;">
    
    <?php
    if ($result->num_rows>0) {
        echo"<table border='1' width='500'>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Add</th>
        <th>Phone</th>
        </tr>";
        while ($row=$result->fetch_array()) {
            echo "<td><td>"
            .$row["std_id"].
            "</td><td>"
            .$row["name"].
            "</td><td>"
            .$row["address"].
            "</td><td>"
            .$row["phone"].
            "</td><td width='100' >" ."<a href=edit.php?id=".$row["std_id"].">edit</a>"."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();

?>

    </div>
</body>
</html>