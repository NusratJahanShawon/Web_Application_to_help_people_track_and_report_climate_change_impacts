<?php 

include "./dataBase_Connection.php";
$sql = "SELECT * FROM temp_data";
$result = $conn->query($sql);

if (isset($_POST['submit'])) {
    // $t_id        = $_POST['t_id'];
    $t_date      = $_POST['t_date'];
    $t_time      = $_POST['t_time'];
    $t_location  = $_POST['t_location'];
    $t_pressure  = $_POST['t_pressure'];
    $t_due_point = $_POST['t_due_point'];
    $t_value     = $_POST['t_value'];
    $t_measurement_scale = $_POST['t_measurement_scale'];

    $sql = "INSERT INTO `temp_data`(`t_date`, `t_time`, `t_location`, `t_pressure`, `t_due_point`, `t_value`, `t_measurement_scale`)
     VALUES ('$t_date','$t_time','$t_location','$t_pressure','$t_due_point','$t_value','$t_measurement_scale')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
      echo "New record created successfully!";
      header( "refresh:2; url=./Manage_temp_Data.php" ); 
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 

    $conn->close();
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
    
    <div class="container">
<table class="table">
    <thead>
    <tr>
        <th>t_id</th>
        <th>t_date</th>
        <th>t_time</th>
        <th>t_location</th>
        <th>t_pressure</th>
        <th>t_due_point</th>
        <th>t_value</th>
        <th>t_measurement_scale</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody> 
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
        <?php

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['t_id']; ?></td>
                    <td><?php echo $row['t_date']; ?></td>
                    <td><?php echo $row['t_time']; ?></td>
                    <td><?php echo $row['t_location']; ?></td>
                    <td><?php echo $row['t_pressure']; ?></td>
                    <td><?php echo $row['t_due_point']; ?></td>
                    <td><?php echo $row['t_value']; ?></td>
                    <td><?php echo $row['t_measurement_scale']; ?></td>
                    <td>
                    <a class="btn btn-info" href="Temp_data_update.php?t_id=<?php echo $row['t_id']; ?>">Edit</a>&nbsp;
                        <a class="btn btn-danger" href="Temp_data_delete.php?id=<?php echo $row['t_id']; ?>">Delete</a>
                    </td>
                    </tr>                       
        
        <?php   }
            }
            $conn->close(); 
        ?>              
    </tbody>
</table>
<!-- <a style="color:black;" class="btn btn-warning" href="temp_data_form.php"><b>Create User</b></a> -->
    </div> 
</body>
</html>