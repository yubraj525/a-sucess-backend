
<?php
include("connection.php");
$id=$_GET['Uid'];


$sel = "SELECT * FROM governn where id='$id'";

$result = mysqli_query($con,$sel);
$update=mysqli_fetch_assoc($result);




?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="insert.css">
     <title>update</title>
 </head>
 <body>
     <div class="container">
        
     <div class="jumbotron">
  <h1 class="display-4">Here,you are updating info!</h1>
  <p class="lead">There you are requested to enter a genuine info.</p>
  <!-- <hr class="my-4"> -->
  <p>If any wrong information is displayed you may contact IT section</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
     <div  id="user"> 
                    <img src="<?php
                     echo $update['std_images']; 
                     ?>"  width=20px height=20px>  
                 <h1><?php echo $update['name'];?></h1>


                    </div>
         <form action="" method="post">
             <h1>update data here</h1>
             <div class="inputbox">
                 <label for="uname">Name:</label>
                 <input type="text" value='<?php echo $update['name'];?>'name="uname" placeholder="name here" required>
             </div>
             <div class="inputbox">
                 <label for="uname">location:</label>
                 <input type="text" value='<?php echo $update['location'];?>'name="location" placeholder="address here" required>
             </div>
             <div class="inputbox">
                 <label for="uname">phone:</label>
                 <input type="number"value='<?php echo $update['phone'];?>' name="phone" placeholder="phone here" required>
             </div>
             <div class="inputbox">
                 <label for="uname">Email:</label>
                 <input type="email" value='<?php echo $update['email'];?>'name="email" placeholder="email here" required>
             </div>
             <input class="btn"type="submit" name="submit">
         </form>
     </div>
 </body>
 </html>
<?php

if(isset($_POST['submit'])){
    $name=$_POST['uname'];
    $location=$_POST['location'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
}
if(empty($_POST['uname'])){

}
else{
$sql="UPDATE  governn set name='$name',location='$location',phone='$phone',email='$email' where id=$id";
$result=mysqli_query($con,$sql);
if ($result)
{
    echo'<script> alert("updated")</script>';
    ?>
    <meta http-equiv="refresh" content="5; URL=http://localhost/data/previous/display.php"/>

    <?php
  
}
else{
    
    echo'<script> alert("not update")</script>';
}
}



?>
 