<?php
session_start();
// connecting the datbase
require_once'Database.php';
$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);

if (!$con){
    die("connection failed:".mysqli_connect_errno());
    }
    
    $error=array();
   
    if(isset($_POST["Login.php"])){
        $email= mysqli_real_escape_string($email);
        $password= md5(mysqli_real_escape_string($password));
    }
    if(!$email){
        $error="Invalid Email Address";
    }
    if(!$password){
        $error="Invalid Password";
    }
    $sql="select * from User where email='$email'";
    $result= mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0){
        if($count==0){
           $sql="select * from User where password='$password'";
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
    } else {
        $error='<b>Login Failed: </b>Email Address do not exit';
}
