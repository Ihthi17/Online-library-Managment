<?php
include 'connect.php';
session_start();
if(!isset($_SESSION["name"]))
{
    header("location:register.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="c"><h1>ONLINE LIBRARY MANAGMENT</h1></div>
<h2 style="text-align:center;color:white;">WELCOME ADMIN</h2>
<div class="v">
    <ul>
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="dashboard.php">dashboard</a></li></div> 
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="addbook.php">Add Book</a></li></div> 
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="memberview.php">Member View</a></li></div>
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="requestview.php">Request View</a></li></div>  
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="changepassword.php">change Password</a></li></div> 
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="log_out.php">Log Out</a></li> </div>
    </ul>

  
 
  
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    
</body>
</html>