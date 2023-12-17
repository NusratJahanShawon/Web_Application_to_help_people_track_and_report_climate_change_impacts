<?php 

include "./dataBase_Connection.php";
$sql = "SELECT * FROM data_management_emp";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- <h2 class="text-center">User Database</h2> -->

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>d_emp_id</th>
                    <th>d_emp_name</th>
                    <th>d_emp_address</th>
                    <th>d_emp_contact</th>
                    <th>d_date_of_birth</th>
                    <th>d_date_of_joining</th>
                    <th>d_email</th>
                    <th>d_password</th>
                    <th>d_manager_id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['d_emp_id']; ?></td>
                    <td><?php echo $row['d_emp_name']; ?></td>
                    <td><?php echo $row['d_emp_address']; ?></td>
                    <td><?php echo $row['d_emp_contact']; ?></td>
                    <td><?php echo $row['d_date_of_birth']; ?></td>
                    <td><?php echo $row['d_date_of_joining']; ?></td>
                    <td><?php echo $row['d_email']; ?></td>
                    <td><?php echo $row['d_password']; ?></td>
                    <td><?php echo $row['d_manager_id'] ? $row['d_manager_id'] : 'No'; ?></td>
                    <td>
                        <a class="btn btn-info" href="admin_dataManager_update.php?d_emp_id=<?php echo $row['d_emp_id']; ?>">Edit</a> 
                        <a class="btn btn-danger" href="admin_dataManager_delete.php?id=<?php echo $row['d_emp_id']; ?>">Delete</a>
                    </td>
                    </tr>                       
        <?php
                }
            }
            $conn->close(); 
        ?>              
    </tbody>
</table>

    </div> 
</body>
</html>
