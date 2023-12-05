<?php 

include "./dataBase_Connection.php";
$sql = "SELECT * FROM general_user";
$result = $conn->query($sql);

if (isset($_POST['submit'])) {
    // $u_id        = $_POST['u_id'];
    $u_name      = $_POST['u_name'];
    $u_address      = $_POST['u_address'];
    $u_contact  = $_POST['u_contact'];
    $u_email  = $_POST['u_email'];
    $u_password = $_POST['u_password'];


    $sql = "INSERT INTO `general_user`(`u_name`, `u_address`, `u_contact`, `u_email`, `u_password`)
     VALUES ('$u_name','$u_address','$u_contact','$u_email','$u_password')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
      echo "New record created successfully!";
      header( "refresh:2; url=./user-register.php" ); 
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 

    $conn->close();
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register Page</title>
    <link rel="stylesheet" href="user-register.css"> <!-- Link to register-specific CSS file -->
</head>
<body>
    <section>
        <form id="registerForm">
            <h1>User Register Page</h1>
            <div class="inputbox">
                <input type="text" id="name" name="name" required>
                <label for="name">Name</label>
            </div>
            <div class="inputbox">
                <input type="text" id="address" name="address" required>
                <label for="address">Address</label>
            </div>

            <div class="inputbox">
                <input type="tel" id="contactNumber" name="contactNumber" required>
                <label for="contactNumber">Contact Number</label>
            </div>


            <div class="inputbox">
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="inputbox">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>

            <button type="submit">Register</button>
            <div class="register" id="registrationMessage" style="display: none;">
                <p>Registration successful! <a href="login.html">Click here to log in</a></p>
            </div>

            <!-- Back button to return to login page -->
            <button id="backToLoginButton" style="display: none;"> Back to Login </button>
        </form>
    </section>

    <script>
        function goToLoginPage() {
            window.location.href = 'login.html';
        }

        document.getElementById("registerForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission to control it with JavaScript
            

            setTimeout(function() {
                // Simulate successful registration
                document.getElementById("registrationMessage").style.display = "block";
                document.getElementById("backToLoginButton").style.display = "none"; // Hide back button on success
            }, 2000); // Simulating a delay of 2 seconds (2000 milliseconds) for demonstration purposes
        });

        document.getElementById("backToLoginButton").addEventListener("click", function() {
            goToLoginPage(); // Navigate to login page
        });

        // Check if registration message is not shown, then display the back button
        setInterval(function() {
            var registrationMessage = document.getElementById("registrationMessage");
            var backToLoginButton = document.getElementById("backToLoginButton");

            if (registrationMessage.style.display !== "block") {
                backToLoginButton.style.display = "block"; // Show back button if registration message is not shown
            } else {
                backToLoginButton.style.display = "none"; // Hide back button if registration message is shown
            }
        }, 500); // Check every 500 milliseconds
    </script>
</body>
</html>








