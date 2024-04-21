<?php
$name=$_POST['name'];
$nopl=$_GET['noofpeople'];
$timersv=$_GET['time'];
$phno=$_GET['phoneno'];
$datersv=$_GET['dateofresv'];
$emmail=$_GET['emailresv'];

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "abc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {

    $name = $_POST['name'];

    $sql = "SELECT * FROM resvstorage WHERE namee='$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "Reservation Status: " . $row["status"];
        }
    } else {
        echo "No reservation found for the provided name.";
    }
}
?>