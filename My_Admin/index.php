<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="Admin_verification.php">
        <h2 class="form-signin-heading">Admin Login</h2>
        <font color="green"><label for="inputEmail" class="sr-only">Email address</label>Admin Email address<br></font>
        <input type="email" id="inputEmail" name="uname" class="form-control" placeholder="Email address" required autofocus><br>
        <font color="green"><label for="inputPassword" class="sr-only">Password</label><p >Admin Password</font>
        <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
        <div class="checkbox">
        </div><font color="red"><?php if(isset($_SESSION["Error"])){if($_SESSION["Error"] == 1){echo "Email address and password is not valid : ";}} ?></font><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
		<?php
			$_SESSION["Error"] = 0;
		?>
     <!-- /container -->

		<hr>

      <footer style="float:left;left:120px;margin-left:33%;">
       <p>&copy;2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    </div>
  </body>
</html>
