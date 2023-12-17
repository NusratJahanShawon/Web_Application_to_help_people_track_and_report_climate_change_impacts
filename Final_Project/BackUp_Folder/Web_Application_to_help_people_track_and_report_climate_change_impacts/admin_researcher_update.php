<?php 

include "dataBase_Connection.php";
$sql = "SELECT * FROM research_emp";
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
                    <th>r_emp_id</th>
                    <th>r_emp_name</th>
                    <th>r_emp_address</th>
                    <th>r_emp_contact</th>
                    <th>r_date_of_birth</th>
                    <th>r_date_of_joining</th>
                    <th>r_email</th>
                    <th>r_password</th>
                    <th>r_manager_id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['r_emp_id']; ?></td>
                    <td><?php echo $row['r_emp_name']; ?></td>
                    <td><?php echo $row['r_emp_address']; ?></td>
                    <td><?php echo $row['r_emp_contact']; ?></td>
                    <td><?php echo $row['r_date_of_birth']; ?></td>
                    <td><?php echo $row['r_date_of_joining']; ?></td>
                    <td><?php echo $row['r_email']; ?></td>
                    <td><?php echo $row['r_password']; ?></td>
                    <td><?php echo $row['r_manager_id'] ? $row['r_manager_id'] : 'No'; ?></td>
                    <td>
                        <a class="btn btn-info" href="admin_researcher_update.php?r_emp_id=<?php echo $row['r_emp_id']; ?>">Edit</a> 
                        <a class="btn btn-danger" href="admin_researcher_delete.php?id=<?php echo $row['r_emp_id']; ?>">Delete</a>
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

<?php 

include "dataBase_Connection.php";

if (isset($_POST['submit'])) {
    $r_emp_id = $_POST['r_emp_id'];
    $r_emp_name = $_POST['r_emp_name'];
    $r_emp_address = $_POST['r_emp_address'];
    $r_emp_contact = $_POST['r_emp_contact'];
    $r_date_of_birth = $_POST['r_date_of_birth'];
    $r_date_of_joining = $_POST['r_date_of_joining'];
    $r_email = $_POST['r_email'];
    $r_password = $_POST['r_password'];
    $r_manager_id = $_POST['r_manager_id'];


    $conn->query("SET foreign_key_checks = 0");

    $sql = "UPDATE `research_emp` SET 
    
        `r_emp_name`='$r_emp_name',
        `r_emp_address`='$r_emp_address',
        `r_emp_contact`='$r_emp_contact',
        `r_date_of_birth`='$r_date_of_birth',
        `r_date_of_joining`='$r_date_of_joining',
        `r_email`='$r_email',
        `r_password`='$r_password',
        `r_manager_id`='$r_manager_id'

    WHERE `r_emp_id`='$r_emp_id'";

    $result = $conn->query($sql); 

    $conn->query("SET foreign_key_checks = 1");

    if ($result == TRUE) {
        echo "Record updated successfully.";
        header("refresh:2; url=./admin_researcher.php"); 
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}


if (isset($_GET['r_emp_id'])) {
    $r_emp_id = $_GET['r_emp_id'];
    $sql = "SELECT * FROM `research_emp` WHERE `r_emp_id`='$r_emp_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $r_emp_name =  $row['r_emp_name'];
            $r_emp_address =  $row['r_emp_address'];
            $r_emp_contact =  $row['r_emp_contact'];
            $r_date_of_birth =  $row['r_date_of_birth'];
            $r_date_of_joining =  $row['r_date_of_joining'];
            $r_email =  $row['r_email'];
            $r_password =  $row['r_password'];
            $r_manager_id =  $row['r_manager_id'];
        } 
?>

<!-- HTML Form for updating data -->
<h2>User Database</h2>
<form action="" method="POST">
    <input type="hidden" name="r_emp_id" value="<?php echo $r_emp_id; ?>">
    <fieldset>
        <legend>User information:</legend>
        r_emp_name:<br>
        <input type="text" name="r_emp_name" value="<?php echo $r_emp_name; ?>">
        <br>

        r_emp_address:<br>
        <input type="text" name="r_emp_address" value="<?php echo $r_emp_address; ?>">
        <br>

        r_emp_contact:<br>
        <input type="text" name="r_emp_contact" value="<?php echo $r_emp_contact; ?>">
        <br>

        r_date_of_birth:<br>
        <input type="date" name="r_date_of_birth" value="<?php echo $r_date_of_birth; ?>">
        <br>

        r_date_of_joining:<br>
        <input type="date" name="r_date_of_joining" value="<?php echo $r_date_of_joining; ?>">
        <br>

        r_email:<br>
        <input type="text" name="r_email" value="<?php echo $r_email; ?>">
        <br>

        r_password:<br>
        <input type="text" name="r_password" value="<?php echo $r_password; ?>">
        <br>

        r_manager_id:<br>
        <input type="text" name="r_manager_id" value="<?php echo $r_manager_id; ?>">
        <br>

        <input type="submit" name="submit" value="Update">
    </fieldset>
</form>
</body>
</html> 

<?php
    } else { 
        header('Location: adm.php');
    } 
}
?>
