<?php
session_start();
if(session_destroy()){
    header("location:index.php");
}
 else {
    session_unset();
}