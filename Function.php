<?php
require_once 'Database.php';
 $con= mysqli_connect(dbserver,dbuser,dbpassword,dbname);

 function getUserEmail($email){
    global $con;
     $sql="Select email from user Where email='$email'";
     $res= mysqli_query($con, $sql);
     
     while ($rows= mysqli_fetch_assoc($res)){
         $email_user=$rows['email'];
     }
     return $email_user;
 }