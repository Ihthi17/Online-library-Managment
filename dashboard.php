<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<style>
    body{
    background-color: rgb(2,0,36);
    background-color: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(126,199,28,1) 35%, rgba(0,212,255,1) 100%)
}
.m
{
    
        width: 250px;
        height: 150px;
        background-color:cadetblue;
        color: white;
        align-items: center;
        margin-left: 58%;
        margin-top: -148px;
        font-size: 36px;
    
}

</style>
    
</head>
<body>
<div class="c"><h1>ONLINE LIBRARY MANAGMENT</h1></div>

<h2 style="text-align:center;color:white;">DASHBOARD</h2>
<div class="v">
    <ul>
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="dashboard.php">dashboard</a></li></div> 
       <div class="n">  <li><a style="text-decoraction:none;color:white;" href="addbook.php">Add Book</a></li></div> 
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="memberview.php">Member View</a></li></div>
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="requestview.php">Request View</a></li></div>  
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="changepassword.php">change Password</a></li></div> 
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="log_out.php">Log Out</a></li></div> 
    </ul>

  
 
  
</div>
<div class="s">
    <div class="b">
    <p>  <?php $sql = "SELECT * from register";

if ($result = mysqli_query($con, $sql)) {

   
    $rowcount = mysqli_num_rows( $result );
  
    // Display result
    printf("Total <br>Members :  %d\n", $rowcount);
 }?>
 </p>
 </div>
 <div class="l">
 <p>  <?php $sql = "SELECT * from addbook";

if ($result = mysqli_query($con, $sql)) {

   
    $rowcount = mysqli_num_rows( $result );
  
    // Display result
    printf("Total<br> Books :  %d\n", $rowcount);
 }?>
 </p>
</div>
<div class="m">
 <p>  <?php $sql = "SELECT * from bookrequest";

if ($result = mysqli_query($con, $sql)) {

   
    $rowcount = mysqli_num_rows( $result );
  
    // Display result
    printf("Total<br> Bookrequest :  %d\n", $rowcount);
 }?>
 </p>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  
</body>
</html>