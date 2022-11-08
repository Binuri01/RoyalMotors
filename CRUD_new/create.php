<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $gender = $_POST['gender'];

    $sql = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

  <head>

    <title>Create an account</title>

      <link rel="stylesheet" type="text/css" href="CreateAccount.css">

  </head>

  <body>

    <div class="createaccount">

      <form action="" method="post">

        <h1>Let's Create Your Account</h1>

        <table id="table1">

        <tr>

          <td><p>First Name:<br>

              <input type="text" name="firstname" placeholder="Enter Your First Name">
              </p></td>

          <td><p>Last Name:<br>

              <input type="text" name="lastname" placeholder="Enter Your Last Name">
              </p></td>
        </tr>

        </table>

      <p>Email:<br>

        <input type="email" name="email" id="email" placeholder="Enter Your Email">
    </p>

    <p>Password:<br>

      <input type="text" name="password" placeholder="Enter Your Password">
    </p>

    <p>Gender:

      <input type="radio" value="Male" name="gender"> Male
      <input type="radio" value="Female" name="gender"> Female
    </p>

    
    <br>

    <center><input type="submit" name="submit" value="Submit"></center>
    <br>
    Already have an account?

    <br><a href="../Login.php">Sign in now!!!</a>

    </form>

    </div>

  </body>

</html>
