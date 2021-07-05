<?php
$con=new mysqli("localhost","root","","application");
if($con->connect_error){
    die("connection failed" . $con->connect_error);
}
?>