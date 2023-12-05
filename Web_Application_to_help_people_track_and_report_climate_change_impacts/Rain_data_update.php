<?php 
include "dataBase_Connection.php";

if (isset($_POST['submit'])) {
    $r_id = $_POST['r_id'];
    $r_date = $_POST['r_date'];
    $r_time = $_POST['r_time'];
    $r_location = $_POST['r_location'];
    $r_duration = $_POST['r_duration'];
    $r_intensity = $_POST['r_intensity']; 
    $r_humidity = $_POST['r_humidity'];
    $r_windspeed = $_POST['r_windspeed'];

    $sql = "UPDATE `rain_data` SET 
        `r_date`='$r_date',
        `r_time`='$r_time',
        `r_location`='$r_location',
        `r_duration`='$r_duration',
        `r_intensity`='$r_intensity',
        `r_humidity`='$r_humidity',
        `r_windspeed`='$r_windspeed' 
        WHERE `r_id`='$r_id'";

    $result = $conn->query($sql); 

    if ($result == TRUE) {
        echo "Record updated successfully.";
        header("refresh:2; url=./manage_rain_Data.php"); 
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $r_id = $_GET['id'];
    $sql = "SELECT * FROM `rain_data` WHERE `r_id`='$r_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $r_date = $row['r_date'];
            $r_time = $row['r_time'];
            $r_location = $row['r_location'];
            $r_duration = $row['r_duration'];
            $r_intensity = $row['r_intensity']; 
            $r_humidity = $row['r_humidity'];
            $r_windspeed = $row['r_windspeed'];
        }
    }
?>


<!-- HTML Form for updating data -->
<!-- HTML Form for updating data -->
<h2> Update Rain Data</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Rain information:</legend>
    r_date:<br>
    <input type="date" name="r_date" value="<?php echo $r_date; ?>">
    <br>
    r_time:<br>
    <input type="time" name="r_time" value="<?php echo $r_time; ?>">
    <br>
    r_location:<br>
    <input type="text" name="r_location" value="<?php echo $r_location; ?>">
    <br>
    r_duration:<br>
    <input type="text" name="r_duration" value="<?php echo $r_duration; ?>">
    <br>
    r_intensity:<br>
    <input type="text" name="r_intensity" value="<?php echo $r_intensity; ?>">
    <br>
    r_humidity:<br>
    <input type="text" name="r_humidity" value="<?php echo $r_humidity; ?>">
    <br>
    r_windspeed:<br>
    <input type="text" name="r_windspeed" value="<?php echo $r_windspeed; ?>">
    <br>
    <input type="hidden" name="r_id" value="<?php echo $r_id; ?>">
    <input type="submit" name="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>


<?php
    } else { 
        header('Location: manage_rain_Data.php');
    } 


?>
