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
<html lang="en">
<head>
    <title>View Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        body {
          background-image: url('image/rain.jpg'); /* Specify the path to your background image */
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
            max-width: 500px;
            margin: 0 auto; 
            padding: 15px; 
            border-radius: 5px;
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Update Rain Data</h2>
        <form action="" method="POST">
            <fieldset>
                <legend>Rain Information:</legend>
                <div class="form-group">
                    <label for="r_date">r_date:</label>
                    <input type="date" class="form-control" name="r_date">
                </div>
                <div class="form-group">
                    <label for="r_time">r_time:</label>
                    <input type="time" class="form-control" name="r_time">
                </div>
                <div class="form-group">
                    <label for="r_location">r_location:</label>
                    <input type="text" class="form-control" name="r_location">
                </div>
                <div class="form-group">
                    <label for="r_duration">r_duration:</label>
                    <input type="text" class="form-control" name="r_duration">
                </div>
                <div class="form-group">
                    <label for="r_intensity">r_intensity:</label>
                    <input type="text" class="form-control" name="r_intensity">
                </div>
                <div class="form-group">
                    <label for="r_humidity">r_humidity:</label>
                    <input type="text" class="form-control" name="r_humidity">
                </div>
                <div class="form-group">
                    <label for="r_windspeed">r_windspeed:</label>
                    <input type="text" class="form-control" name="r_windspeed">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
    
<table class="table table-bordered table-striped">
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