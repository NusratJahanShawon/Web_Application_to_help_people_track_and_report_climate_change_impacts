<?php
include "./dataBase_Connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform the delete operation
    $sql = "DELETE FROM customer_care_emp WHERE c_emp_id = $id";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Record deleted successfully!";
        header( "refresh:2; url=./admin_customerCare.php" );
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request. No 'id' parameter provided.";
}

$conn->close();
?>
