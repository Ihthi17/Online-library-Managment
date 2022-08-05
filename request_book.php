<?php
session_start();
include 'connect.php';
if(isset ($_POST['submit']))//book request
{
    $book_name=$_POST['book_name'];
    $request_date=$_POST['request_date'];
    $request_time=$_POST['request_time'];
   $session_name=$_SESSION["username"];
    
    $sql="INSERT INTO bookrequest(Book_Name,Request_Date,Request_Time,Member_name)VALUES(' $book_name',' $request_date','$request_time','$session_name')";
    
    if($con->query($sql)==TRUE)
   {
      echo '<script language="javascript">alert("Your Request successfully Send to Admin");</script>';
    
       
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="c"><h1>ONLINE LIBRARY MANAGMENT</h1></div>
<h2 style="text-align:center;color:white;">REQUEST BOOK</h2>
<div class="v">
    <ul>
    <div class="n"><li><a style="text-decoraction:none;color:white;" href="bookview.php">View Book</a></li></div>
    <div class="n"><li><a style="text-decoraction:none;color:white;" href="search_book.php">search Book</a></li></div> 
     <div class="n">  <li><a style="text-decoraction:none;color:white;" href="request_book.php">Request Book</a></li></div> 
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="log_out.php">Log Out</a></li></div>  
    </ul>

  
 
  
</div>


  <div class="border1">
    <table class="table">
      <tr>
<form action="request_book.php" method="POST"  enctype="multipart/form-data" autocomplete="off">
  
   <td> <label>BOOK NAME</label></td>
  <td>  <input type="text"  name="book_name" required></td>
</tr>
   
  
 
<tr>
   <td> <label>REQUEST_DATE</label></td>
  <td>  <input type="date"  name="request_date"  required></td>
<tr>
  
  
  <td>  <label >REQUEST_TIME</label></td>
  <td>  <input type="time" class="form-control" name="request_time"  required></td>
</tr>
  
  
  
 
   
  <tr>
 <td> <button type="submit" name="submit" class="btn btn-primary">REQUEST</button></td>
</tr>
</form>
</div>
</body>
</html>