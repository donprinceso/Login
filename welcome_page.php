<!DOCTYPE html>

<?php
    include 'Function.php';
?>

<html>
   <head>
       <meta charset="windows-1252">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Login View</title>
       <link rel="stylesheet" href="css/bootstrap.css"/>
       <script src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet/mystyle.css"/>
        <link rel="stylesheet" type="text/css" href="stylesheet/Cascade.css"/>
    </head>
    <body>
        <div class="blog-masthead navbar-fixed-top">
      <div class="container">
        <nav class="blog-nav ">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">Sport</a>
          <a class="blog-nav-item" href="#">Gist</a>
          <a class="blog-nav-item" href="#">Education</a>
          <a class="blog-nav-item navbar-right" href="Logout.php">Log Out</a>
        </nav>
      </div>
        </div>
        <div class="container">
            <div class="dropdown-menu-left meun">
                <img src="default_male.png" class="user-img" alt="User image"/>
                <div><?php  if(isset($_SESSION['email'])):?>
                    <strong><?php echo $_SESSION['email']['email'];?></strong>> 
                    <hr/>
                   <?php endif ?></div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>    
    </body>
</html>
