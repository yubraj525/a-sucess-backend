<?php

include('connection.php');
$id=$_GET['Did'];
$sql="DELETE FROM `governn` WHERE id='$id'";
$result=mysqli_query($con,$sql);
// if($result)
// {

//     echo"deleted";
// }
// else{
//     echo"not deleted";
// }

    // process form data
    // ...
    // redirect to another page
    header('Location: /data/previous/display.php');
    

?>