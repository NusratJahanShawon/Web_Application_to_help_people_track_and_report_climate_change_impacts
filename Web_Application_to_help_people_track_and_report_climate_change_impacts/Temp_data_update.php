<?php 
include "dataBase_Connection.php";

if (isset($_POST['submit'])) {
    $t_id = $_POST['t_id'];
    $t_date = $_POST['t_date'];
    $t_time = $_POST['t_time'];
    $t_location = $_POST['t_location'];
    $t_pressure = $_POST['t_pressure'];
    $t_due_point = $_POST['t_due_point']; 
    $t_value = $_POST['t_value'];
    $t_measurement_scale = $_POST['t_measurement_scale'];

    $sql = "UPDATE `temp_data` SET 
        `t_date`='$t_date',
        `t_time`='$t_time',
        `t_location`='$t_location',
        `t_pressure`='$t_pressure',
        `t_due_point`='$t_due_point',
        `t_value`='$t_value',
        `t_measurement_scale`='$t_measurement_scale' 
        WHERE `t_id`='$t_id'";

    $result = $conn->query($sql); 

    if ($result == TRUE) {
        echo "Record updated successfully.";
        header("refresh:2; url=./Manage_temp_Data.php"); 
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['t_id'])) {
    $t_id = $_GET['t_id'];
    $sql = "SELECT * FROM `temp_data` WHERE `t_id`='$t_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $t_date =  $row['t_date'];
            $t_time =  $row['t_time'];
            $t_location =  $row['t_location'];
            $t_pressure =  $row['t_pressure'];
            $t_due_point =  $row['t_due_point'];
            $t_value =  $row['t_value'];
            $t_measurement_scale =  $row['t_measurement_scale'];
        } 
?>

<!-- HTML Form for updating data -->
<h2>Update Temperature Data</h2>
<form action="" method="POST">
    <input type="hidden" name="t_id" value="<?php echo $t_id; ?>">
    <fieldset>
        <legend>Temperature information:</legend>
        t_date:<br>
        <input type="date" name="t_date" value="<?php echo $t_date; ?>">
        <br>
        t_time:<br>
        <input type="time" name="t_time" value="<?php echo $t_time; ?>">
        <br>
        t_location:<br>
        <input type="text" name="t_location" value="<?php echo $t_location; ?>">
        <br>
        t_pressure:<br>
        <input type="text" name="t_pressure" value="<?php echo $t_pressure; ?>">
        <br>
        t_due_point:<br>
        <input type="text" name="t_due_point" value="<?php echo $t_due_point; ?>">
        <br>
        t_value:<br>
        <input type="text" name="t_value" value="<?php echo $t_value; ?>">
        <br>
        t_measurement_scale:<br>
        <input type="text" name="t_measurement_scale" value="<?php echo $t_measurement_scale; ?>">
        <br>
        <input type="submit" name="submit" value="Update">
    </fieldset>
</form>
</body>
</html> 

<?php
    } else { 
        header('Location: Manage_temp_Data.php');
    } 
}
?>
