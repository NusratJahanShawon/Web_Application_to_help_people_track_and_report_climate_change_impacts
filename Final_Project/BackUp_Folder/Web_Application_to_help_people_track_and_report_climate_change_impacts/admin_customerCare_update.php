<?php 
include "dataBase_Connection.php";

if (isset($_POST['submit'])) {
    $c_emp_id = $_POST['c_emp_id'];
    $c_emp_name = $_POST['c_emp_name'];
    $c_emp_address = $_POST['c_emp_address'];
    $c_emp_contact = $_POST['c_emp_contact'];
    $c_date_of_birth = $_POST['c_date_of_birth'];
    $c_date_of_joining = $_POST['c_date_of_joining'];
    $c_email = $_POST['c_email'];
    $c_password = $_POST['c_password'];
    $c_manager_id = $_POST['c_manager_id'];


    $conn->query("SET foreign_key_checks = 0");

    $sql = "UPDATE `customer_care_emp` SET 
    
        `c_emp_name`='$c_emp_name',
        `c_emp_address`='$c_emp_address',
        `c_emp_contact`='$c_emp_contact',
        `c_date_of_birth`='$c_date_of_birth',
        `c_date_of_joining`='$c_date_of_joining',
        `c_email`='$c_email',
        `c_password`='$c_password',
        `c_manager_id`='$c_manager_id'

    WHERE `c_emp_id`='$c_emp_id'";

    $result = $conn->query($sql); 

    $conn->query("SET foreign_key_checks = 1");

    if ($result == TRUE) {
        echo "Record updated successfully.";
        header("refresh:2; url=./admin_customerCare.php"); 
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}


if (isset($_GET['c_emp_id'])) {
    $c_emp_id = $_GET['c_emp_id'];
    $sql = "SELECT * FROM `customer_care_emp` WHERE `c_emp_id`='$c_emp_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $c_emp_name =  $row['c_emp_name'];
            $c_emp_address =  $row['c_emp_address'];
            $c_emp_contact =  $row['c_emp_contact'];
            $c_date_of_birth =  $row['c_date_of_birth'];
            $c_date_of_joining =  $row['c_date_of_joining'];
            $c_email =  $row['c_email'];
            $c_password =  $row['c_password'];
            $c_manager_id =  $row['c_manager_id'];
        } 
?>

<!-- HTML Form for updating data -->
<h2>User Database</h2>
<form action="" method="POST">
    <input type="hidden" name="c_emp_id" value="<?php echo $c_emp_id; ?>">
    <fieldset>
        <legend>User information:</legend>
        c_emp_name:<br>
        <input type="text" name="c_emp_name" value="<?php echo $c_emp_name; ?>">
        <br>

        c_emp_address:<br>
        <input type="text" name="c_emp_address" value="<?php echo $c_emp_address; ?>">
        <br>

        c_emp_contact:<br>
        <input type="text" name="c_emp_contact" value="<?php echo $c_emp_contact; ?>">
        <br>

        c_date_of_birth:<br>
        <input type="date" name="c_date_of_birth" value="<?php echo $c_date_of_birth; ?>">
        <br>

        c_date_of_joining:<br>
        <input type="date" name="c_date_of_joining" value="<?php echo $c_date_of_joining; ?>">
        <br>

        c_email:<br>
        <input type="text" name="c_email" value="<?php echo $c_email; ?>">
        <br>

        c_password:<br>
        <input type="text" name="c_password" value="<?php echo $c_password; ?>">
        <br>

        c_manager_id:<br>
        <input type="text" name="c_manager_id" value="<?php echo $c_manager_id; ?>">
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