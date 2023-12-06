<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css"> <!-- Link to login-specific CSS file -->
</head>
<body>
    <section>
        <form id="loginForm">
            <h1>Login</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" required>
                <label for="">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" required>
                <label for="">Password</label>
            </div>
            <div class="forget">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forget Password</a>
            </div>
            <button type="submit">Login</button>
            <div class="register">
                <p>Don't have an account? <a href="register-type.html">Register</a></p>
            </div>
            <button type="button" id="backToHomeButton" onclick="goToHome()">Back to Home</button>
        </form>
    </section>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission
            alert('Perform login functionality here.');
        });

        function goToHome() {
            // Change the location to the home page URL
            window.location.href = "home.html";
        }
    </script>
    <script src="home.js"></script>
</body>
</html>
