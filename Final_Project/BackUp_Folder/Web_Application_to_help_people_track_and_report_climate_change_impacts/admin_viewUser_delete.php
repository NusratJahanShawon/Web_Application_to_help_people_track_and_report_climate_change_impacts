<?php
include "./dataBase_Connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform the delete operation
    $sql = "DELETE FROM general_user WHERE u_id = $id";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Record deleted successfully!";
        header( "refresh:2; url=./admin_viewUser.php" );
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request. No 'id' parameter provided.";
}

$conn->close();
?>
