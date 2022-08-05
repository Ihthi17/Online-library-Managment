<?php
session_start();
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $password=$_POST["password"];
    $sql="SELECT * FROM `admin` WHERE A_name='$name' AND A_password='$password' ";
    $result=mysqli_query($con,$sql);
    print_r($result);
    $row = mysqli_num_rows($result);
    
    if($row==1)
   {   
    
$_SESSION["name"] =$name;

      header("Location:admin.php");
   }
   else{
    echo '<script language="javascript">alert("Invelid Name or Password");</script>';

    
    
   }
   
  
    
   



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
<h4 style="text-align:center;color:white;">Log In</h4>
   <div class="box2">
<form action="a_login.php" method="POST" autocomplete="off">
<div class="mb-3">
    <label style="color:white" for="exampleInputPassword1" class="form-label">User Id</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
  <label style="color:white" for="exampleInputPassword1" class="form-label">PASSWORD</label>
    <input id="password" type="password" class="form-control" name="password" id="exampleInputPassword1" required>
    <i id="eye"class="fa-solid fa-eye-slash"style="margin-left:-32px;cursor:pointer; float: right;
    top: -25px;
    right: 10px;
    position: relative;"></i>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Log In</button>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="jq.js"></script>
</body>


</html>