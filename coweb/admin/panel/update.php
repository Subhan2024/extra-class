<?php

include('config.php');

$userid = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$update = "update user set fname = '$fname', lname = '$lname' ,email = '$email'  where id = '$userid'";
$res = mysqli_query($connection , $update);
if (!$res) {
     die("connection failed");
}
header("location:viewuser.php")
?>