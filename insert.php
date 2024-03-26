

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insert.css">
    <title>insert</title>
</head>
<body>
    <div class="container">
    <div class="jumbotron">
  <h1 class="display-4">Hello, students,teachers!</h1>
  <p class="lead">This is a simple web, a simple website to display and store yours information.</p>
  <!-- <hr class="my-4"> -->
  <p>If any wrong information is displayed you may contact IT section</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

        <form action="" method="post" enctype="multipart/form-data">
            <h1>enter your data here</h1>
            <div class="inputbox">
                <label for="uname">Name:</label>
                <input type="text" name="uname" placeholder="name here" required>
            </div>
            <div class="inputbox">
                <label for="location">location:</label>
                <input type="text" name="location" placeholder="address here" required>
            </div>
            <div class="inputbox">
                <label for="phone">phone:</label>
                <input type="number" name="phone" placeholder="phone here" required>
            </div>
            <div class="inputbox">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="email here" required>
            </div>
            <input class="file" type="file" name="my_image">
            <!-- <input type="submit" name="submit"> -->
           <div class="button"><button value="login" name="submit" class="btn"><a href="logout.php">submit</a></button>
            
            <button value="data"class="btn"><a href="display.php">show data</a></button>
            </div>
          
        </form>
        <!-- <a href="display.php"><input type="submit" value='data'></a> -->
        </div>
  
</body>
</html>

<?php
include("connection.php");
session_start();

$_FILES["my_image"];
$filename =$_FILES["my_image"]["name"];
$tempname= $_FILES["my_image"]["tmp_name"];

$folder="images/".$filename;
move_uploaded_file($tempname,$folder);

// we wrote this php and html in same document in order to male output and agian reload the page

if(isset($_POST['submit'])){
    
    $name=$_POST['uname'];
    $location=$_POST['location'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
}
$user=$_SESSION['user'];

if($user==true){

}
else{
    header('Location: /data/previous/login.php');
   
}

if(empty($_POST['uname'])){

}
else{
    $sql="INSERT INTO governn(std_images,name,location,phone,email) values('$folder','$name', '$location', '$phone', '$email')";
    if($sql)
    {
        echo"registered";
    }
    else{
        
        echo"not registered";
    }
    mysqli_query($con,$sql);
    header('Location: /data/previous/insert.php');
    // exit();
}

    // process form data
    // ...
    // redirect to another page
  
//this ia a very significant line to indert or interact the database



?>
