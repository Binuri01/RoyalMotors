<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

</head>

<body bgcolor="000000">
    <center>
    <font size="10">
    <a href="../../CRUD_new/create.php">Create</a><br>
    <a href="update.php">Update</a><br>
    <a href="delete.php">Delete</a><br>
    <a href="view.php">View</a><br>
    <a href="config.php">Config</a><br>
    
     <!--<h1>Hello,<?php echo $_SESSION['name']; ?></h1>-->

     <a href="Logout.php">Logout</a>
    </font>
    </center>
</body>

</html>

<?php 

}else{

     header("Location: Index.php");

     exit();

}

 ?>