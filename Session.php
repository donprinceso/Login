<?php

require_once 'Database.php';
session_start();
$user_check=$_SESSION['email'];
$query="SELECT email from user where email='$user_check' ";
$ses_sql= mysqli_query($con,$query);
$row= mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session=$row['email'];
if(!isset($_SESSION['email'])){
    header('Location:index.php');
}

