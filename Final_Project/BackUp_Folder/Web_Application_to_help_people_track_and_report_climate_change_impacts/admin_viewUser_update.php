<?php 
include "dataBase_Connection.php";

if (isset($_POST['submit'])) {
    $u_id = $_POST['u_id'];
    $u_name = $_POST['u_name'];
    $u_address = $_POST['u_address'];
    $u_contact = $_POST['u_contact'];
    $u_email = $_POST['u_email'];
    $u_password = $_POST['u_password']; 


    $sql = "UPDATE `general_user` SET 
    
        `u_name`='$u_name',
        `u_address`='$u_address',
        `u_contact`='$u_contact',
        `u_email`='$u_email',
        `u_password`='$u_password' 

    WHERE `u_id`='$u_id'";

    $result = $conn->query($sql); 

    if ($result == TRUE) {
        echo "Record updated successfully.";
        header("refresh:2; url=./admin_viewUser.php"); 
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}


if (isset($_GET['u_id'])) {
    $u_id = $_GET['u_id'];
    $sql = "SELECT * FROM `general_user` WHERE `u_id`='$u_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $u_name =  $row['u_name'];
            $u_address =  $row['u_address'];
            $u_contact =  $row['u_contact'];
            $u_email =  $row['u_email'];
            $u_password =  $row['u_password'];
        } 
?>

<!-- HTML Form for updating data -->
<h2>User Database</h2>
<form action="" method="POST">
    <input type="hidden" name="u_id" value="<?php echo $u_id; ?>">
    <fieldset>
        <legend>User information:</legend>
        u_name:<br>
        <input type="text" name="u_name" value="<?php echo $u_name; ?>">
        <br>

        u_address:<br>
        <input type="text" name="u_address" value="<?php echo $u_address; ?>">
        <br>

        u_contact:<br>
        <input type="text" name="u_contact" value="<?php echo $u_contact; ?>">
        <br>

        u_email:<br>
        <input type="text" name="u_email" value="<?php echo $u_email; ?>">
        <br>

        u_password:<br>
        <input type="text" name="u_password" value="<?php echo $u_password; ?>">
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
