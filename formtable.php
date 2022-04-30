<?php
    include"config.php";
    $result = "";
    $sql="select * from `form`  ";
    $result=mysqli_query($con,$sql);

    $result2 = "";
    if(isset($_POST['sb'])){
        $name = $_POST['se'];
        $sql2="select * from `form` WHERE `name` = '$name' or `id` = '$name' or `email`='$name'";
        $result2=mysqli_query($con,$sql2);
    }
        

?>
<html>
<head>
    <style>
        .sb 
        {
            width: 100px;
        }
        .se{
            width:100%;
        }
        </style>
</head>
<body>
    <h1 align="center"><a href="formtable.php">Table</a></h1>
    <table border="1" align="center">
    <tr>
          <form  method="POST" >
            <th colspan="5" >
                <input class="se" name="se" type = "text">
            </th>
            <th>
                <input class="sb" name="sb" value="Search" type ="submit">
            </th>
            </form>
        </tr>
        <!-- <input type="submit" value="search"> -->
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Passwored</th>
        <th>Contact</th>
        
        <th>Edit</th>
        <th>Delete</th>
</tr>
<?php
if($result2){
$row2=mysqli_fetch_assoc($result2) ;
    
 
?>
    <tr>
        <td><?php echo $row2['id'];?></td>
         <td><?php echo $row2['name'];?></td>
         <td><?php echo $row2['email'];?></td>
         <td><?php echo $row2['password'];?></td>
         <td><?php echo $row2['contact'];?></td>
         <td><a href="edit.php?id=<?php echo $row2['id']?>">EDIT</a></td>
         <td><a href="delete.php?id=<?php echo $row2['id']?>">DELETE</a></td>
    </tr>
    <?php
    
}
else{
while($row=mysqli_fetch_assoc($result))       
{
?>
<tr>
    <td><?php echo $row['id'];?></td>
     <td><?php echo $row['name'];?></td>
     <td><?php echo $row['email'];?></td>
     <td><?php echo $row['password'];?></td>
     <td><?php echo $row['contact'];?></td>
     
     <td><a href="edit.php?id=<?php echo $row['id']?>">EDIT</a></td>
     <td><a href="delete.php?id=<?php echo $row['id']?>">DELETE</a></td>
</tr>
<?php
}
}

    ?>
        </table>
</body>
</html>








    

