<?php

include 'connect.php';
if(isset ($_POST['upload']))//insert book
{
   $target_dir="upload/";
   $target_file=$target_dir.basename($_FILES["book_img"]["name"]);
    $book_name=$_POST['book_name'];
    $keyword=$_POST['keyword'];
    $author=$_POST['author'];
    $book_img=$_POST['book_img'];
    $upload_date=$_POST['upload_date'];
    
    if(move_uploaded_file($_FILES["book_img"]["tmp_name"],$target_file))
    {
      $sql="INSERT INTO addbook(BookName,Keyword,Author,BookImg,UploadDate)VALUES('$book_name',' $keyword','  $author','$target_file',' {$upload_date}')";
      if($con->query($sql)==TRUE)
     {
        
     
         
     }
   
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


  <div class="border1">
    <table class="table">
      <tr>
<form action="addbook.php" method="POST"  enctype="multipart/form-data" autocomplete="off">
  
   <td> <label>BOOK NAME</label></td>
  <td>  <input type="text"  name="book_name" required></td>
</tr>
   
  
  <tr>
   <td> <label>KEYWORD</label></td>
   <td> <input type="text"  name="keyword"  required></td>
   
   
</tr>
<tr>
   <td> <label>AUTHOR</label></td>
  <td>  <input type="text"  name="author"  required></td>
<tr>
  
  
  <td>  <label >BOOK IMAGE</label></td>
  <td>  <input type="file" class="form-control" name="book_img"  required></td>
</tr>
  
  
  
  <tr>
   <td> <label>UPLOAD DATE</label></td>
   <td> <input type="date"  name="upload_date" required></td>
   <tr>
   
  <tr>
 <td> <button type="submit" name="upload" class="btn btn-primary">Upload</button></td>
</tr>
</form>
</div>
<br>
<br>
<?php
$sql='SELECT *FROM addbook';
$result=$con->query($sql);
if($result->num_rows>0)
        {
?>

<table class="table">
    <tr>
        <th>#</th>
        <th>BOOK_NAME</th>
        <th>KEYWORD</th>
        <th>AUTHOR</th>
        <th>BOOK_IMG</th>
        <th>UPLOAD_DATE</th>
        <th>Action</th>
        
        </tr>
<?php
$count=1;
      while($row=mysqli_fetch_assoc($result))
      {
        //echo $row['BookImg'];die;
        ?>
        <tr>
        <td><?php echo $count++;?></td>
        <td><?php echo $row["BookName"];?></td>
        <td><?php echo $row["Keyword"];?></td>
        <td><?php echo $row["Author"];?></td>
        <td><a href=' <?php echo $row["BookImg"];?>'target="_blank">view</a></td>
        <td><?php echo $row['UploadDate'];?></td>
        <td><button class="btn btn-danger"><a href="b_delete.php?id=<?php echo $id;?>"onclick="return confirm('Are you sure?')"class="text-light">Delete</a></button></td>
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