<?php
// $servername = "your_server_name"; 
// $username = "your_username"; 
// $password = "your_password"; 
$dbname = "demo_frontend_end"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from the table
$sql = "SELECT ResearcherID, ResearcherName, ResearcherAge, ResearcherSalary FROM research_table";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Department</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <!-- Your navigation links here -->
        </div>

        <div class="main">
            <div id="research-department">
                <h2>Research Department</h2>

                <!-- Display database table -->
                <?php
                if ($result->num_rows > 0) {
                    echo "<table border='1'>
                            <tr>
                                <th>ResearcherID</th>
                                <th>ResearcherName</th>
                                <th>ResearcherAge</th>
                                <th>ResearcherSalary</th>
                            </tr>";

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["ResearcherID"] . "</td>
                                <td>" . $row["ResearcherName"] . "</td>
                                <td>" . $row["ResearcherAge"] . "</td>
                                <td>" . $row["ResearcherSalary"] . "</td>
                              </tr>";
                    }

                    echo "</table>";
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <footer class="footer p-10 bg-neutral text-neutral-content">
        <!-- Your footer content here -->
    </footer>

</body>

</html>
