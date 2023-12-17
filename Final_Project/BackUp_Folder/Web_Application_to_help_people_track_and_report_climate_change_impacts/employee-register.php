<?php
// Assuming you have a database connection established
// $servername = "your_servername";
// $username = "your_username";
// $password = "your_password";
// $dbname = "web_application_to_help_people_track_and_report_climate_change_i";

// $conn = new mysqli($servername, $username, $password, $dbname);
include "./dataBase_Connection.php";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $name = $_POST["name"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $dob = $_POST["dob"];
    $doj = $_POST["doj"];
    $experience = $_POST["experience"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $department = $_POST["department"];

    // Insert data into the appropriate table based on the selected department
    switch ($department) {
        case "customer_care_emp":
            $sql = "INSERT INTO customer_care_emp (c_emp_name, c_emp_address, c_emp_contact, c_date_of_birth, c_date_of_joining, c_year_of_experience, c_email, c_password) VALUES ('$name', '$address', '$contact', '$dob', '$doj', '$experience', '$email', '$password')";
            break;

        case "data_management_emp":
            $sql = "INSERT INTO data_management_emp (d_emp_name, d_emp_address, d_emp_contact, d_date_of_birth, d_date_of_joining, d_year_of_experience, d_email, d_password) VALUES ('$name', '$address', '$contact', '$dob', '$doj', '$experience', '$email', '$password')";
            break;

        case "research_emp":
            $sql = "INSERT INTO research_emp (r_emp_name, r_emp_address, r_emp_contact, r_date_of_birth, r_date_of_joining, r_year_of_experience, r_email, r_password) VALUES ('$name', '$address', '$contact', '$dob', '$doj', '$experience', '$email', '$password')";
            break;

        default:
            // Handle the default case or show an error
            break;
    }

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // Redirect to the dashboard page with signup data
        header("Location: dashboard.php?name=$name&address=$address&contact=$contact&dob=$dob&doj=$doj&experience=$experience&email=$email&department=$department");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Register Page</title>
    <link rel="stylesheet" href="employee-register.css"> <!-- Link to register-specific CSS file -->
</head>
<body>
    <section>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <h1>Employee Register Page</h1>

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
            <label for="department">Select Department:</label>
        <select name="department">
            <option value="customer_care_emp">Customer Care Employee</option>
            <option value="data_management_emp">Data Management Employee</option>
            <option value="research_emp">Research Employee</option>
        </select>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="inputbox">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="inputbox">
                <label for="doj">Date of Joining</label>
                <input type="date" id="doj" name="doj" required>
            </div>

            <div class="inputbox">
                <input type="number" id="experience" name="experience" required>
                <label for="experience">Years of Experience</label>
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
                <p>Registration successful! <a href="login.html">Click here to log in</a></p>
            </div>

            <!-- Back button to return to login page -->
            <button id="backToLoginButton" style="display: none;"> Back to Login </button>
        </form>
    </section>

    <script src="employee-register.js"></script> <!-- Link to register-specific JavaScript file -->
</body>
</html>
