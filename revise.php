
<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a Grocesssory store</title>
    <link rel="stylesheet" href="style copy.css">
    <!-- font awasome cdn - we goes to google and searched a css star rating and the we school came over and the cdn is tiin th -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="containers">
        <div class="header">

            <div class="logosite"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <a>Grocessory</a></div>
            <div class="nav">
                <ol>
                    <li><a href="#">Home</a><line></line></li>
                    <li><a href="#">Features</a><line></line></li>
                    <li><a href="#">Products</a><line></line></li>
                    <li><a href="#">Catagories</a><line></line></li>
                    <li><a href="#">Review</a><line></line></li>
                </ol>
            </div>
          
            <div class="searchbar">
                <div class="fa fa-search"id="searchbtn" ></div>
                <div class="fa fa-user"  id="userlogin"></div>
                <div class="fa fa-shopping-cart" id="cartbtn"></div>
            </div>

            <form class="searchform">
                <input type="search" id="searchbar" name="searchbar" placeholder="search here...">
                <label><i class="fa fa-search" aria-hidden="true"></i></label>
            </form>

            <div class="shopping-cart">
                <div class="box">
                    <img src="/photos/cyberwarrior/cart-img-1.png">
                    <div class="content">
                        <h3>watermelon</h3>
                        <span>quantity:1 </span>
                        <span>price:3$</span>
                    </div>
                    <div class="fa fa-trash"></div>
            </div>
            <div class="box">
                    <img src="/programming/photos/cyberwarrior/cart-img-2.png">
                    <div class="content">
                        <h3>onion</h3>
                        <span>quantity:1 </span>
                        <span>price:2.99$</span>
                    </div>
                    <div class="fa fa-trash" ></div>
                </div>
                <div class="box">
                    <img src="/programming/photos/cyberwarrior/cart-img-3.png">
                    <div class="content">
                        <h3>chicken</h3>
                        <span>quantity:1 </span>
                        <span>price:4.5$</span>
                    </div>
                    <div class="fa fa-trash"></div>
                </div>
                <div class="total">total = 19.3$</div>
             <div class="orderncncl">
                <div ><a href="#">clear all</a></div>
                <div ><a href="#">order list</a></div>


             </div>
            </div>
            <form action="#" method="post" enctype="multipart/form-data"  class="login-form">
                <h3>login now</h3>
          <input type="text" name="lemail" placeholder="your email" class="box1">
        <input type="password" name="lpassword" placeholder="your password" class="box1">
            <p>forget password ? <a href="#">click here.</a></p>
            <p>dont have an account ?  <a href="#">create now.</a></p>
            
            <input type="submit" value="login" name="login" class="btn">
            </form>
            
        </div>
        <div class="jumbotron">
  <h1 class="display-4">Hello, students,teachers!</h1>
  <p class="lead">This is a simple web, a simple website to display and store yours information.</p>
  <!-- <hr class="my-4"> -->
  <p>If any wrong information is displayed you may contact IT section</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>


    </div>
    <script src="style.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php

if(isset($_POST['login'])){

    $pwd=$_POST['lpassword'];
    $email=$_POST['lemail'];
}

if(empty($_POST['lemail']))
{
}
else{
    
    $sql="SELECT * FROM governn where email='$email' && phone='$pwd'";
    $result=mysqli_query($con,$sql);
    $number=mysqli_num_rows($result);
 

    if($number==1)
    {
        $_SESSION['user']=$email;
        echo'<script> alert("login success")</script>';
       
 ?>
<meta http-equiv='refresh' content='0;URL=display.php'>
<?php
    }
    else{
        echo'<script> alert("ypu are not logged in")</script>';
    }
       
}
 

?>