<!DOCTYPE html>
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
    </head>
    <body>
        <div class="container ">
            <form method="post" action="Login.php" role="form" id="form" class="form-signin">
    <h2 class="form-signin-heading">Login View</h2>
    <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email address" required autofocus/>
    </div> 
    <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" id="InputPassword" placeholder="Password"/>
    </div>  
   <div class="checkbox">
    <label><input type="checkbox" value="remember-me"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-lg btn-primary btn-block" id="submit">Submit</button>
  <br>
  <p>Create An Account:
      <a class="btn btn-default" href="#">Sign Up</a>
  </p>
       </form>
        </div>
    </body>
</html>
