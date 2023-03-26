<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydb1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id=$_GET['id'];


$sql="SELECT * FROM `student_db` where `std_id`=$id";
$result=$conn->query($sql);
$v=$result->fetch_array();
?>

<div align="center" style="background-color: red; color: white; font-size: 50px; height: 70px; width: 100%;"> My 1st php file</div>
<br>
<br>
<div align="center">
<form action="update.php" method="POST">
  <input type="text" name="name" placeholder="name" value="<?php echo $v['name']; ?>">
  <input type="text" name="address" placeholder="address" value="<?php echo $v['address']; ?>">
  <input type="text" name="phone" placeholder="Phone" value="<?php echo $v['phone']; ?>">
  <input type="hidden" name="id" placeholder="phone" value="<?php echo $id; ?>">

  <input type="submit" name="submit" value="Update">

  
  <button onclick="history.back()">Go Back</button>
  </form>
</div>

<?php
$conn->close();
?>