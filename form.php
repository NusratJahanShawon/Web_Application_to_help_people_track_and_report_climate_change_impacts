<?php 
include "db.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $gender = $_POST['gender'];

    $sql = "INSERT INTO `users`(`lastname`, `firstname`, `email`, `password`, `gender`) VALUES ('$last_name','$first_name','$email','$password','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully!";
      header( "refresh:2; url=./view.php" ); 

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close();

  }
?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="Submit">

  </fieldset>

</form>

</body>

</html>