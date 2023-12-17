<?php
include "./dataBase_Connection.php"; // path directory --> ./

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $u_name = $_POST['name'];
        $u_address = $_POST['address'];
        $u_contact = $_POST['contactNumber'];
        $u_email = $_POST['email'];
        $u_password = $_POST['password'];

        $sql = "INSERT INTO `general_user`(`u_name`, `u_address`, `u_contact`, `u_email`, `u_password`)
                VALUES ('$u_name','$u_address','$u_contact','$u_email','$u_password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully!";
            // Uncomment the next line if you want to redirect after insertion
            // header("Location: ./user-register.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
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
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" id="registerForm">
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

            <button type="submit" value="Signup">Register</button>

            <div class="register" id="registrationMessage" style="display: none;">
                <p>Registration successful! <a href="login.php">Click here to log in</a></p>
            </div>

            <!-- Back button to return to login page -->
            <button id="backToLoginButton" style="display: none;"> Back to Login </button>
        </form>
    </section>

    <script>
        function goToLoginPage() {
            window.location.href = 'login.php';
        }

        document.getElementById("backToLoginButton").addEventListener("click", function() {
            goToLoginPage(); // Navigate to login page
        });
    </script>
</body>
</html>
