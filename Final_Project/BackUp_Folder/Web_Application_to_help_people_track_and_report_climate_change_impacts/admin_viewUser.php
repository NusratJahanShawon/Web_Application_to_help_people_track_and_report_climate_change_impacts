<?php 

include "./dataBase_Connection.php";
$sql = "SELECT * FROM general_user";
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
        <h2 class="text-center">User Database</h2>



        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>u_id</th>
                    <th>u_name</th>
                    <th>u_address</th>
                    <th>u_contact</th>
                    <th>u_email</th>
                    <th>u_password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <?php

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['u_id']; ?></td>
                    <td><?php echo $row['u_name']; ?></td>
                    <td><?php echo $row['u_address']; ?></td>
                    <td><?php echo $row['u_contact']; ?></td>
                    <td><?php echo $row['u_email']; ?></td>
                    <td><?php echo $row['u_password']; ?></td>
                    <td>

                    <a class="btn btn-info" href="admin_viewUser_update.php?u_id=<?php echo $row['u_id']; ?>">Edit</a>&nbsp;

                    <a class="btn btn-danger" href="admin_viewUser_delete.php?id=<?php echo $row['u_id']; ?>">Delete</a>

                    </td>
                    </tr>                       
        
        <?php   }
            }
            $conn->close(); 
        ?>              
    </tbody>
</table>

    </div> 
</body>
</html>