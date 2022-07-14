<?php

require "config/dbconfig.php";

$admin_email=$_POST["admin_email"];
$password=$_POST["password"];

if(!empty($admin_email) || !empty($admin_email)){

$r="select * from admin where admin_email='$admin_email' AND password='$password'";
$result = mysqli_query($con,$r);
$count=mysqli_num_rows($result);
if($count>0){
    if($row=mysqli_fetch_array($result))
        header("location:starter.html");
    }
   else{
       header("location:log.php");
       die();
    
}}


?>