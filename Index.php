<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="Login.css">
  </head>

  <body>

    <div class="loginbox">
      <img src="Avatar.png" class="avatar">

      <form action="Login.php" method="post">

        <h2>Sign In</h2>

        <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <center><p>Username</p>
        <input type="text" name="username" placeholder="Enter Username" autocomplete="off">

        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password" autocomplete="off"><br><br>

        <input type="submit" value="Sign in"></center><br><br>

        Don't have an account?
        <br><a href="CRUD_new/create.php"> Create one now!!!</a>

      </form>

    </div>

  </body>

</html>