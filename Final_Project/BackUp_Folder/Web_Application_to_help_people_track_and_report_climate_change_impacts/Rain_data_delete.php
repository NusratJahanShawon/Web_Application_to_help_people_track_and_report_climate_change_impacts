<?php
include "./dataBase_Connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform the delete operation
    $sql = "DELETE FROM rain_data WHERE r_id = $id";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Record deleted successfully!";
        header( "refresh:2; url=./Manage_rain_Data.php" );
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request. No 'id' parameter provided.";
}

$conn->close();
?>
