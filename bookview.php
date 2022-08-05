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
<div class="v">
    <ul>
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="bookview.php">View Book</a></li></div> 
       <div class="n">  <li><a style="text-decoraction:none;color:white;" href="request_book.php">Request Book</a></li></div> 
       <div class="n"><li><a style="text-decoraction:none;color:white;" href="log_out.php">Log Out</a></li></div> 
    </ul>
</div>

    <?php
$sql='SELECT *FROM addbook';
$result=$con->query($sql);
if($result->num_rows>0)
        {
?>
<div class="border1"><table class=table>
    
    <tr>
        <th>#</th>
        <th>BOOK_NAME</th>
        <th>KEYWORD</th>
        <th>AUTHOR</th>
        <th>BOOK_IMG</th>
        <th>UPLOAD_DATE</th>
        
        </tr>
<?php
$count=1;
      while($row=mysqli_fetch_assoc($result))
      {
        
        ?>
        <tr>
        <td><?php echo $count++;?></td>
        <td><?php echo $row["BookName"];?></td>
        <td><?php echo $row["Keyword"];?></td>
        <td><?php echo $row["Author"];?></td>
        <td> <a href=' <?php echo $row["BookImg"];?>'target="_blank">view</a></td>
        <td><?php echo $row['UploadDate'];?></td>
        
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
