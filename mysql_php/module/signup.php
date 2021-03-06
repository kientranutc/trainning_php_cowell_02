<?php 
session_start();
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Trang chủ</title>

	<!-- Bootstrap -->
	<link href="../../public/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../style.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-2  col-md-offset-10">
              <a href="logout.php" id="logout"><?php  if(isset($_SESSION['login'])){
                echo "Logout(".$_SESSION['login'].")";
              }
              else
              {
                ?>
                <a href="../index.php" id="login">Login</a>
                <?php
              }
              ?></a>
            </div>
          </div>
        </div>
      </header>
      <div class="container">
       <div class="signup">
         <h3>Signup</h3>

         <?php 
         if(isset($_SESSION['error_exits_username']))
         {
          ?>
          <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <strong>Danger!</strong> <?php echo $_SESSION['error_exits_username']; ?>
          </div>


          <?php
          unset($_SESSION['error_exits_username']);
        }

        ?>
        <form class="form-horizontal" id="regester" method="post" action="prosssignup.php">
          <div class="form-group">
            <label for="firstname" class="col-sm-3 control-label">First name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="first name..">
              <span id="error-firstname"></span>
            </div>
          </div>

          <div class="form-group">
            <label for="lastname" class="col-sm-3 control-label">Last name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="lastname" name="lastname" required  placeholder="last name..">
              <span id="error-lastname"></span>
            </div>
          </div>

          <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Username:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="username" name="username" required placeholder="username..">
              <span id="error-username">
                <?php 
                if(isset($_SESSION['error_username']))
                {
                  echo  $_SESSION['error_username'];
                  unset($_SESSION['error_username']);
                }
                ?>
                

              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password:</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="password" name="password" required  placeholder="password..">
              <span id="error-password"><?php 
               if(isset($_SESSION['error_password']))
               {
                echo  $_SESSION['error_password'];
                unset($_SESSION['error_password']);
              }
              ?></span>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-3 control-label">email:</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" required name="email" placeholder="email..">
              <span id="error-email"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="phone" name="phone" requried  placeholder="phone..">
              <span id="error-phone"></span>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9">
              <input   type="submit" class="btn btn-default" value="Regester" >
              <button type="reset" class="btn btn-default">reset</button>
            </div>
          </div>
        </form>
        
      </div>

    </div>
    <footer>
     
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../public/js/bootstrap.min.js"></script>
  </body>
  </html>
  
