<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="Login.css">
  </head>

  <body>

    <div class="loginbox">
      <img src="Avatar.png" class="avatar">

      <form action="Login.php" method="post">

        <h2>Admin Sign In</h2>

        <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <center><p>Username</p>
        <input type="text" name="username" placeholder="Enter Username">

        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password"><br><br>

        <input type="submit" value="Sign in"></center><br><br>

        <!--Don't have an account?
        <br><a href=""> Create one now!!!</a>-->

      </form>

    </div>

  </body>

</html>