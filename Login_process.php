<?php
session_start();
// connecting the datbase
require_once'Database.php';
include 'Function.php';
$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);

if (!$con){
    die("connection failed:".mysqli_connect_errno());
    }
    
    $errors=array();
 //  if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST["login_btn"])){
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
    if(count($errors)==0){
    $sql="SELECT email,password FROM user WHERE email = '$email' and password ='$password'";
    $result= mysqli_query($con, $sql);
    $count= mysqli_num_rows($result);
   if($count==1){
     // $user_check_mail= mysqli_insert_id($con);
      $_SESSION['email']= getUserEmail($email);
    header("location: welcome_page.php");
   }
    }
    
 else {
      array_push($errors,'<b>Login Failed:</b>Wrong Email And Password');  
 }
}
   
   