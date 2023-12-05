<?php 
include "Temp_data_Table.php";

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

<!DOCTYPE html>
<html>
<body>
<h2>Update Temperature Data</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Temperature information:</legend>
    t_date:<br>
    <input type="date" name="t_date">
    <br>
    t_time:<br>
    <input type="time" name="t_time">
    <br>
    t_location:<br>
    <input type="text" name="t_location">
    <br>
    t_pressure:<br>
    <input type="text" name="t_pressure">
    <br>
    t_due_point:<br>
    <input type="text" name="t_due_point">
    <br>
    t_value:<br>
    <input type="text" name="t_value">
    <br>
    t_measurement_scale:<br>
    <input type="text" name="t_measurement_scale">
    <br>
    <input type="submit" name="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>