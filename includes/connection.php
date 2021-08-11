<?php
//$con = mysqli_connect("localhost","root","wamppass1","social_network");
$con = new mysqli("localhost","root","wamppass1","social_network");
// Check connection
if ($con->connect_error) {
    echo "FAILED!";
  die("Connection failed: " . $con->connect_error);
}
else{
    //echo "success";
}
?>
