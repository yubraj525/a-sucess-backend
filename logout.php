<?php


session_start();

session_unset();
  
echo'<script> alert("you have been logged out please login to continue")</script>';
?>
<meta http-equiv='refresh' content='0;URL=revise.php'>
<?php
?>