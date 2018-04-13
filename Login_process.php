<?php
session_start();
// connecting the datbase
require_once'Database.php';
$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);

if (!$con){
    die("connection failed:".mysqli_connect_errno());
    }
    
    $errors=array();
   if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST["Login.php"])){
        $email= mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
    
    if(empty($email)){
        array_push($errors,'<b>Login Failed:</b>Invalid Email Address');
    }
    if(empty($password)){
        array_push($errors,'<b>Login Failed:</b>Invalid Password');
    }
     if(strlen($password) < 6){			
	 array_push($errors,"Password should not be less than 6 characters");
    }
    $sql="SELECT password FROM user WHERE email = '$email' and password ='$password'";
    $result= mysqli_query($con, $sql);
   // $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
   // $active=$row['active'];
    $count= mysqli_num_rows($result);
   if($count>0){
      // session_register("email");
     //  $_SESSION['email']=$email;
    header('location:dashbord.php');
   }
    
 else {
      array_push($errors,'<b>Login Failed:</b>Wrong Email And Password');  
}
   }
   }