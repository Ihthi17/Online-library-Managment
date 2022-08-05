<?php
session_start();
include 'connect.php';
if(isset($_POST['submit']))
{
   // print_r($_SESSION);die;
    $psw_o=$_POST["psw_o"];
    $psw_n=$_POST["psw_n"];
    $sesstion_name=$_SESSION["name"];
    $sql="SELECT count(*) FROM `admin` where A_password='$psw_o' and A_name='$sesstion_name'";
   // print_r($sql);die;
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
    $sql="UPDATE `admin` set A_password='$psw_n'WHERE A_name='$sesstion_name'";
    $con->query($sql);
    echo '<script language="javascript">alert("Password is Changed");</script>';
   
    }
    else{
        
        echo '<script language="javascript">alert("Password not Changed");</script>';   
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changepassword</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
<div class="c"><h1>ONLINE LIBRARY MANAGMENT</h1></div>
<h2 style="text-align:center ;color:white;">WELCOME ADMIN</h2>
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
<div class="border1">
    <table class="table">
        <form action="changepassword.php" method="post">
        <tr>
            <td><label>Old Password</label></td>
            <td><input  type="password" name="psw_o"></td>
</tr>
<td>         <label>New Password</label></td>
            <td><input id="password" type="password" name="psw_n"><i id="eye"class="fa-solid fa-eye-slash"style="margin-left:-32px;cursor:pointer; float: right;
    top: 7px;
    right: 74%;
    position: relative;"></i></td>
</tr>
<tr><td><button class="btn btn-primary" type="submit" name="submit">Change</button>
            </form>
            <table>
            </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="jq.js"></script>
</body>
</html>