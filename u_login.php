<?php
 session_start();
include 'connect.php';
?>
<?php
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM register WHERE Fullname	='$username' and Psw=' $password' ";
    $result = mysqli_query($con,$sql);
    
   if(mysqli_num_rows($result)==1)
   {   
    
    $_SESSION["username"] =$username;

      header("Location: member.php");
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
    <title>login</title>
   <link rel="stylesheet"href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>
  body{
    background-color: rgb(2,0,36);
    background-color: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(126,199,28,1) 35%, rgba(0,212,255,1) 100%)
  }
</style>
</head>
<body>

   
   <h4 style="text-align:center;">Log In</h4>
   <div class="box2">
<form action="u_login.php" method="POST" autocomplete="off">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">FULL NAME</label>
    <input type="text" class="form-control" name="username" id="exampleInputPassword1"placeholder="Full name" required>
  </div>
  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
    <input id="password" type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
    <i id="eye"class="fa-solid fa-eye-slash"style="margin-left:-32px;cursor:pointer; float: right;
    top: -25px;
    right: 10px;
    position: relative;"></i>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Log In</button>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
 <script src="jq.js"></script>
</body>
</html>