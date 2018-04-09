<?php


// connecting the datbase
require_once'Database.php';
$con = mysqli_connect(dbserver,dbuser,dbpassword,dbname);

if (!$con){
    die("connection failed:".mysqli_connect_errno());
    }
    echo 'connection successfully';
