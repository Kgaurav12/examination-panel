<?php

require "config/dbconfig.php";

$student_id=$_POST["student_id"];
$prn_no=$_POST["prn_no"];
$student_name=$_POST["student_name"];
$student_email=$_POST["student_email"];
$password=$_POST["password"];
$student_dept_=$_POST["student_dept"];
$student_mobile=$_POST["student_mobile"];


if(!empty($admin_email) || !empty($admin_email)){

$r="select * from admin where admin_email='$admin_email' AND password='$password'";
$result = mysqli_query($con,$r);
$count=mysqli_num_rows($result);
if($count>0){
    if($row=mysqli_fetch_array($result))
        header("location:starter.html");
    }
   else{
       header("location:addstudent.php");
       die();
    
}}


?>