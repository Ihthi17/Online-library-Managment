<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="c"><h1>ONLINE LIBRARY MANAGMENT</h1></div>
<h2 style="text-align:center;color:white;">WELCOME ADMIN</h2>
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
    <?php
$sql='SELECT *FROM register';
$result=$con->query($sql);
if($result->num_rows>0)
        {
?>
<div class="border1">
<table class="table">
    <tr>
        <th>#</th>
        <th>FULL_NAME</th>
        <th>MAIL</th>
        <th>DEPARTMENT</th>
        <th>MOBILE</th>
         <th>PASSWORD</th>
        </tr>
<?php
$count=1;
      while($row=mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
        <td><?php echo $count++;?></td>
        <td><?php echo $row['Fullname'];?></td>
        <td><?php echo $row['Mail'];?></td>
        <td><?php echo $row['Department'];?></td>
        <td><?php echo $row['Mobile'];?></td>
        <td><?php echo $row['Psw'];?></td>
        <?php
      }

?>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>     
</body>
</html>
