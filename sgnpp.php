<?php

$username=$_GET['username'];
$fname=$_GET['firstname'];
$mname=$_GET['middlename'];
$surname=$_GET['lastname'];
$email=$_GET['mailid'];
$dateofbday=$_GET['bday'];
$phoeneum=$_GET['phone'];
$password=$_GET['password'];

echo"$username,$fname,$mname,$surname";

$host = "root";
$user = "rishitapkir";
$psw = "arpita";
$db = "userinfo";

$conn = mysqli_conect($host,$user,$pw,$db);

if (!$conn) {
    die("Error: Unable to connect to the PostgreSQL database.");
}

elseif($conn==true){

	echo "Connected to the PostgreSQL database successfully!";

}
?>
