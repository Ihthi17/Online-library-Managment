<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>requestview</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<style>
      body{
    background-color: rgb(2,0,36);
    background-color: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(126,199,28,1) 35%, rgba(0,212,255,1) 100%)
}
.border1{
   border-left: 20%;
   margin-left: 25%;
   margin-top: -45%;
    background-color: cornflowerblue;

}
    </style>
</head>
<body>
<div class="c"><h1>ONLINE LIBRARY MANAGMENT</h1></div>

<h2 style="text-align:center;color:white;">REQUEST-VIEW</h2>
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
  $sql="SELECT * FROM bookrequest";
  $result=$con->query($sql);
  if($result->num_rows>0)
  {
    ?>
    <div class="border1">
<table class="table">
    <tr>
        <th>#</th>
        <th>Book_Name</th>
        <th>Request_Date</th>
        <th>Request_Time</th>
        <th>Member_name</th>
        
        </tr>
<?php
$count=1;
      while($row=mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
        <td><?php echo $count++;?></td>
        <td><?php echo $row['Book_Name'];?></td>
        <td><?php echo $row['Request_Date'];?></td>
        <td><?php echo $row['Request_Time'];?></td>
        <td><?php echo $row['Member_name'];?></td>
        
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
  
  
 
  
</div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>