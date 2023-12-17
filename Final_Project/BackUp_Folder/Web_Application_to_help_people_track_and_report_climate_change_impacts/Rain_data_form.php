<?php 
include "data_Table.php";

  if (isset($_POST['submit'])) {
    // $t_id        = $_POST['t_id'];
    $t_date      = $_POST['t_date'];
    $t_time      = $_POST['t_time'];
    $t_location  = $_POST['t_location'];
    $t_pressure  = $_POST['t_pressure'];
    $t_due_point = $_POST['t_due_point'];
    $t_value     = $_POST['t_value'];
    $t_measurement_scale = $_POST['t_measurement_scale'];

    $sql = "INSERT INTO `data_management_temp_data`(`t_date`, `t_time`, `t_location`, `t_pressure`, `t_due_point`, `t_value`, `t_measurement_scale`)
     VALUES ('$t_date','$t_time','$t_location','$t_pressure','$t_due_point','$t_value','$t_measurement_scale')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
      echo "New record created successfully!";
      header( "refresh:2; url=./View_TempTable.php" ); 
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 

    $conn->close();
  }
?>

<h2> Update Rain Data</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Rain information:</legend>
    r_date:<br>
    <input type="date" name="r_date">
    <br>
    r_time:<br>
    <input type="time" name="r_time">
    <br>
    r_location:<br>
    <input type="text" name="r_location">
    <br>
    r_duration:<br>
    <input type="text" name="r_duration">
    <br>
    r_intensity:<br>
    <input type="text" name="r_intensity">
    <br>
    r_humidity:<br>
    <input type="text" name="r_humidity">
    <br>
    r_windspeed:<br>
    <input type="text" name="r_windspeed">
    <br>
    <input type="submit" name="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>