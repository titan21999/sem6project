<?php

$username=$_GET['username'];
$fname=$_GET['firstname'];
$mname=$_GET['middlename'];
$surname=$_GET['lastname'];
$email=$_GET['mailid'];
$dateofbday=$_GET['bday'];
$phoeneum=$_GET['phno'];
$password=$_GET['password'];

echo"$username,$fname,$mname,$surname";

$host = "localhost";
$user = "root";
$psw = "";
$database = "userinfo";

$conn = mysqli_connect($host,$user,$psw,$database);

if (!$conn) {
    die("Error: Unable to connect to the PostgreSQL database.");
}
elseif($conn==true){

	echo"Connection Successful";
	$query="INSERT INTO `users`(`usernm`, `firstnamae`, `middlenamae`, `lastnamae`, `maail`, `birthdayy`, `pohnum`, `passkey`) VALUES ('$username','$fname','$mname','$surname','$email','$dateofbday','$phoeneum','$password')";
	$execute=mysqli_query($conn,$query);

}
?>
