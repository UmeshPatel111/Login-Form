<?php
include"config.php";
$name=$_REQUEST['name'];
$email = $_REQUEST['email'];
$password=$_REQUEST['password'];
$contact=$_REQUEST['contact'];
//$addrese=$_REQUEST['addrese'];

$insert="INSERT INTO `form`(`name`,`email`,`password`,`contact`)VALUES('$name','$email','$password','$contact')";
$result= mysqli_query($con,$insert);
     
header("location:form.php");



?>