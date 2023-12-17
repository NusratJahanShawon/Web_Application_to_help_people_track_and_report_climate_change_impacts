<?php 

include "./dataBase_Connection.php";
$sql = "SELECT * FROM temp_data";
$result = $conn->query($sql);

if (isset($_POST['submit'])) {
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
<html lang="en">
<head>
    <title>View Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        body {
          background-image: url('image/big.jpg'); /* Specify the path to your background image */
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Do not repeat the background image */
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
        }
        table {
            width: 100%;
        }

        tbody {
            background-color: #ffffff; /* White background color for tbody */
        }
        thead, tbody {
            background-color: #ffffff; /* White background color for thead and tbody */
        }

        form {
            max-width: 500px; /* Set max width for the form */
            margin: 0 auto; /* Center the form on the page */
            background-color: #ffe4c4; /* White background color for the form */
            padding: 15px; /* Add some padding to the form */
            border-radius: 5px; /* Add border radius to the form */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Update Temperature Data</h2>
        <form action="" method="POST">
            <fieldset>
                <legend>Temperature Information:</legend>
                <div class="form-group">
                    <label for="t_date">t_date:</label>
                    <input type="date" class="form-control" name="t_date">
                </div>
                <div class="form-group">
                    <label for="t_time">t_time:</label>
                    <input type="time" class="form-control" name="t_time">
                </div>
                <div class="form-group">
                    <label for="t_location">t_location:</label>
                    <input type="text" class="form-control" name="t_location">
                </div>
                <div class="form-group">
                    <label for="t_pressure">t_pressure:</label>
                    <input type="text" class="form-control" name="t_pressure">
                </div>
                <div class="form-group">
                    <label for="t_due_point">t_due_point:</label>
                    <input type="text" class="form-control" name="t_due_point">
                </div>
                <div class="form-group">
                    <label for="t_value">t_value:</label>
                    <input type="text" class="form-control" name="t_value">
                </div>
                <div class="form-group">
                    <label for="t_measurement_scale">t_measurement_scale:</label>
                    <input type="text" class="form-control" name="t_measurement_scale">
                </div>      

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
            </fieldset>
        </form>

        <table class="table table-bordered table-striped">
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