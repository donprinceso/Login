<!DOCTYPE html>

<?php
    session_start();
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
        <div class="blog-masthead ">
      <div class="container">
        <nav class="blog-nav ">
          <li class="blog-nav-item active"><a class="blog-nav-item "href="#">Home</a></li>
          <li class="blog-nav-item "><a class="blog-nav-item "href="#">Inbox</a></li>
          <li class="blog-nav-item "><a class="blog-nav-item "href="#">Plane</a></li>
          <li class="blog-nav-item "><a class="blog-nav-item "href="#">Contan</a></li>
          <nav class="blog-nav navbar-right">
          <li class="blog-nav-item" href="#"> Hi <?php echo $_SESSION['email'];?></li>
          <li class="blog-nav-item " ><a class="blog-nav-item "href="Logout.php">Log Out</a></li>
          </nav>
        </nav>
          
      </div>
        </div>
        
            <div class="dropdown-menu-left meun">
                <img src="default_male.png" class="user-img" alt="User image"/> 
                <br/>
                <?php if (isset($_SESSION['email'])){
                        echo $_SESSION['email'];
                }
                ?>
            </div>
        <div class="container">
             <?php  if(isset($_SESSION['email'])):?>
            <p> Welcome <?php echo $_SESSION['email'];?></p>
               <p>Hello this is Serverland Tech Company the best of software company ever</p>     
                   <?php endif ?>   
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>    
    </body>
</html>
