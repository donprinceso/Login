<?php
session_start();
// connecting the datbase
require_once'Database.php';
$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);

if (!$con){
    die("connection failed:".mysqli_connect_errno());
    }
    
    $error=array();
   $email="";
   $password="";
   
    if(isset($_POST["Login.php"])){
        $email= mysqli_real_escape_string($email);
        $password= md5(mysqli_real_escape_string($password));
    }
   if(empty($email)){
        $error="Invalid Email Address";
    }
    if(empty($password)){
        $error="Invalid Password";
    }
        if($error==0){
           $sql="select * from user where password='$password' And email='$email'";
    $result= mysqli_query($con, $sql); 
    if(mysqli_num_rows($result)>0){
        while ($row = mysql_fetch_row($result)) {
            header("Location:dashboard.php");
        }
    }
 else {
      $error= '<b>Login Failed: </b>Wrong Email Or Password'; 
    }
        
}
   
