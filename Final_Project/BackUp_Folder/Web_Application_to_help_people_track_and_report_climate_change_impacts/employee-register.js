function goToLoginPage() {
    window.location.href = 'login.html';
}

document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission to control it with JavaScript
    
    // Here you can add code to perform registration process
    // For this example, let's simulate a successful registration after 2 seconds
    // Replace this with your actual registration logic (e.g., sending data to a server)
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


