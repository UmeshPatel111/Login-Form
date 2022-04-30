<?php
    include"config.php";


    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $contact=$_REQUEST['contact'];
   // $addrese=$_REQUEST['addrese'];


    $edit="UPDATE `form` SET `name`='$name',`email`='$email',`contact`='$contact' WHERE `id`='$id'";
    $result = mysqli_query($con,$edit);
    if($result)
    {
        header("location:formtable.php");
    }
?>