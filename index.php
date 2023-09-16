<?php
require "scripts/check-login.php";
cookie_session_index();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <form class="form-signin" action="pages/login-check.php" method="post">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    
                    <label for="uname" class="sr-only">Username</label>
                    <input type="text" id="uname" name="uname" class="form-control" placeholder="Username" required autofocus>
                    
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
  </body>
</html>
