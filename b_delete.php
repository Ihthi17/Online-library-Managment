<?php 
include 'connect.php';
$id=$_GET['id'];

$sql="DELETE FROM addbook WHERE b_id=$id";
if(mysqli_query($con,$sql)){
    
    header('location:addbook.php');
}
else{
    echo mysqli_error($con);
}
?>