<?php 

include "./dataBase_Connection.php";

if (isset($_POST['submit'])) {
    $u_id        = $_POST['u_id'];
    $u_name      = $_POST['u_name'];
    $u_address      = $_POST['u_address'];
    $u_contact  = $_POST['u_contact'];
    $u_email  = $_POST['u_email'];
    $u_password = $_POST['u_password'];


    $sql = "INSERT INTO `general_user`(`u_id`,`u_name`, `u_address`, `u_contact`, `u_email`, `u_password`)
     VALUES ('$u_id','$u_name','$u_address','$u_contact','$u_email','$u_password')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
      echo "New record created successfully!";
    //   header( "refresh:2; url=./user-register.php" ); 
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 

    $conn->close();
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body> 
    <div class="container">
    <h2>Update Temperature Data</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Temperature information:</legend>
    name:<br>
    <input type="text" name="u_name">
    <br>
    u_address:<br>
    <input type="text" name="u_address">
    <br>
    u_contact:<br>
    <input type="text" name="u_contact">
    <br>
    u_email:<br>
    <input type="text" name="u_email">
    <br>
    u_password:<br>
    <input type="text" name="u_password">
    
    <input type="submit" name="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>