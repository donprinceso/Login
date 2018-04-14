<?php
require_once 'Database.php';
 $con= mysqli_connect(dbserver,dbuser,dbpassword,dbname);

 function getUserEmail($email){
     global $con;
     $sql="Select * from user Where email=".$email;
     $res= mysqli_query($con, $sql);
     $email_user= mysqli_fetch_assoc($result);
     return $email_user;
 }