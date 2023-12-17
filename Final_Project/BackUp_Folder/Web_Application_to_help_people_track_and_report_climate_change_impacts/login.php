<?php
include "./dataBase_Connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    $table_name = "";
    $redirect_page = "";
    $email_field = "";
    $password_field = "";

    switch ($user_type) {
        case "general_user":
            $table_name = "general_user";
            $redirect_page = "General_User.php";
            $email_field = "u_email";
            $password_field = "u_password";
            break;

        case "data_management_emp":
            $table_name = "data_management_emp";
            $redirect_page = "dataManager.php";
            $email_field = "d_email";
            $password_field = "d_password";
            break;

        case "research_emp":
            $table_name = "research_emp";
            $redirect_page = "research.php";
            $email_field = "r_email";
            $password_field = "r_password";
            break;

        case "customer_care_emp":
            $table_name = "customer_care_emp";
            $redirect_page = "customer_care.php";
            $email_field = "c_email";
            $password_field = "c_password";
            break;

        case "admin":
            $table_name = "admin";
            $redirect_page = "admin.php";
            $email_field = "a_email";
            $password_field = "a_password";
            break;

                    
    }

    $sql = "SELECT * FROM `$table_name` WHERE `$email_field`='$email' AND `$password_field`='$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        header("Location: ./$redirect_page");
        echo "Login successful!";
    } else {
        echo "Login failed.";
    }

    $conn->close();
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- <link rel="stylesheet" href="login_01.css">  -->
</head>
<body>
    <section>
        <form id="loginForm" method="post" action="login.php">
            <h1>Login</h1>

            <div class="inputbox">
                <input type="radio" id="general_user" name="user_type" value="general_user" checked>
                <label for="general_user">General User</label><br>

                <input type="radio" id="data_management_emp" name="user_type" value="data_management_emp">
                <label for="data_management_emp">Data Manager</label><br>

                <input type="radio" id="research_emp" name="user_type" value="research_emp">
                <label for="research_emp">Researcher</label><br>

                <input type="radio" id="customer_care_emp" name="user_type" value="customer_care_emp">
                <label for="customer_care_emp">Customer Care</label><br>
                
                <input type="radio" id="admin" name="user_type" value="admin">
                <label for="admin">Admin</label><br>
            </div>

            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email" required>
                <label for="">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password" required>
                <label for="">Password</label>
            </div>
            <div class="forget">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forget Password</a>
            </div>
            <button type="submit">Login</button>
            <div class="register">
                <p>Don't have an account? <a href="register-type.php">Register</a></p>
            </div>
            <button type="button" id="backToHomeButton" onclick="goToHome()">Back to Home</button>
        </form>
    </section>

    <script>
        function goToHome() {
            // Change the location to the home page URL
            window.location.href = "home.php";
        }
    </script>
    <!-- <script src="home.js"></script> -->
</body>
</html>

