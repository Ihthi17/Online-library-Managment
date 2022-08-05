<?php
include 'connect.php';
if(isset ($_POST['submit']))//insert register
{
    $fullname=$_POST['fullname'];
    $mail=$_POST['mail'];
    $department=$_POST['department'];
    $mobile=$_POST['mobile'];
    
    $pass=$_POST['pass'];
    
    $sql="INSERT INTO register(Fullname,Mail,Mobile,Department,Psw)VALUES('$fullname',' $mail',' $mobile','$department',' $pass')";
    if($con->query($sql)==TRUE)
   {
      echo '<script language="javascript">alert("Your are Sucessfully Registred Login Here..");</script>';
    
       
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <style>
    #btn{
      
    justify-content: center;  
align-items: center;  

margin-left: 45%;
    text-align: center;
    background:blue;
    color:white;
    font-size: 25px;
    position:fixed;
}
    

    </style>
</head>
<body class="k">
<div class="box">
    
       <button class="btn btn-success"><a style=" text-decoration: none; color:white" href="u_login.php">Member LogIn</a></button> 
        <button class="btn btn-success"><a style=" text-decoration: none; color:white" href="a_login.php">Admin LogIn</a></button>
    
</div>
<br>
<h2 style="text-align:center;color:black;">WELCOME to Library</h2>
<br>
<div class="container">
 
<div class="box2">
<form  id="frm"action="register.php" method="POST" autocomplete="off">
  <div class="mb-3">
    <label style="color:white;" for="exampleInputEmail1" class="form-label">FULL NAME<span style ="color:red;font-size:20px;">*</span></label>
    <input type="text" class="form-control" name="fullname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name" required>
   
  </div>
  
  
  <div class="mb-3">
    <label style="color:white;" for="exampleInputPassword1" class="form-label">MAIL<span style ="color:red;font-size:20px;">*</span></label>
    <input type="mail" class="form-control" name="mail" id="exampleInputPassword1"placeholder="Mail Address" required>
  </div>
   <div class="mb-3">
    <label style="color:white;" for="exampleInputPassword1" class="form-label">MOBILE<span style ="color:red;font-size:20px;">*</span></label>
    <input type="tel" class="form-control"  name="mobile" id="exampleInputPassword1"placeholder="Mobile Number" required>
  </div>
  <div class="mb-3">
    <label style="color:white;" for="exampleInputPassword1" class="form-label">DEPARTMENT<span style ="color:red;font-size:20px;">*</span></label>
  <select class="form-select"name="department"required aria-label="Default select example" required>
  <option value="It">It</option>
  <option value="Account">Account</option>
  <option value="Managment">Managment</option>
  <option value="English">English</option>
  <option value="Engineering">Engineering</option>
 </select>
</div>
  
  <div class="mb-3">
  <label style="color:white;" for="exampleInputPassword1" class="form-label">PASSWORD<span style ="color:red;font-size:20px;">*</span></label>
    <input  type="password" class="form-control" name="pass"id="password"  placeholder="Password" required>
    <i id="eye"class="fa-solid fa-eye-slash"style="margin-left:-32px;cursor:pointer; float: right;
    top: -25px;
    right: 10px;
    position: relative;"></i>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</div>
<button id="btn">Click to Register</button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
 <script src="jq.js"></script>
  
  
 
</body>
</html>