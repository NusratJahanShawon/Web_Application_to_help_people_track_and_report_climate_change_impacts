<?php 

include "./dataBase_Connection.php";
$sql = "SELECT * FROM rain_data";
$result = $conn->query($sql);

if (isset($_POST['submit'])) {
    // $t_id        = $_POST['r_id'];
    $r_date      = $_POST['r_date'];
    $r_time      = $_POST['r_time'];
    $r_location  = $_POST['r_location'];
    $r_duration  = $_POST['r_duration'];
    $r_intensity = $_POST['r_intensity'];
    $r_humidity     = $_POST['r_humidity'];
    $r_windspeed = $_POST['r_windspeed'];

    $sql = "INSERT INTO `rain_data`(`r_date`, `r_time`, `r_location`, `r_duration`, `r_intensity`, `r_humidity`, `r_windspeed`)
 VALUES ('$r_date','$r_time','$r_location','$r_duration','$r_intensity','$r_humidity','$r_windspeed')";


    $result = $conn->query($sql);

    if ($result == TRUE) {
      echo "New record created successfully!";
      header( "refresh:2; url=./manage_rain_Data.php" ); 
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
        <th>r_id</th>
        <th>r_date</th>
        <th>r_time</th>
        <th>r_location</th>
        <th>r_duration</th>
        <th>r_intensity</th>
        <th>r_humidity</th>
        <th>r_windspeed</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody> 



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
        <?php

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['r_id']; ?></td>
                    <td><?php echo $row['r_date']; ?></td>
                    <td><?php echo $row['r_time']; ?></td>
                    <td><?php echo $row['r_location']; ?></td>
                    <td><?php echo $row['r_duration']; ?></td>
                    <td><?php echo $row['r_intensity']; ?></td>
                    <td><?php echo $row['r_humidity']; ?></td>
                    <td><?php echo $row['r_windspeed']; ?></td>
                    <td>
                        <a class="btn btn-info" href="Rain_data_update.php?id=<?php echo $row['r_id']; ?>">Edit</a>

                        <a class="btn btn-danger" href="Rain_data_delete.php?id=<?php echo $row['r_id']; ?>">Delete</a>
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