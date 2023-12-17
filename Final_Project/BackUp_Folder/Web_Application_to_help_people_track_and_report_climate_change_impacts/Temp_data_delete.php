<?php
include "./dataBase_Connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform the delete operation
    $sql = "DELETE FROM temp_data WHERE t_id = $id";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Record deleted successfully!";
        header( "refresh:2; url=./Manage_temp_Data.php" );
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request. No 'id' parameter provided.";
}

$conn->close();
?>
