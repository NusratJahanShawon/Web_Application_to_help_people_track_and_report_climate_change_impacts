<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "web_application_to_help_people_track_and_report_climate_change_i";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?>