function updateTable() {
    // Get input values
    var t_data = document.getElementById("t_data").value;
    var t_time = document.getElementById("t_time").value;
    var t_location = document.getElementById("t_location").value;
    var t_pressure = document.getElementById("t_pressure").value;
    var t_dewpoint = document.getElementById("t_dewpoint").value;
    var t_value = document.getElementById("t_value").value;
    var t_measurementscale = document.getElementById("t_measurementscale").value;

    // Create a new row in the table
    var table = document.getElementById("weatherTable");
    var newRow = table.insertRow(table.rows.length);

    // Add cells to the new row
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);

    // Set the innerHTML of cells with input values
    cell1.innerHTML = t_data;
    cell2.innerHTML = t_time;
    cell3.innerHTML = t_location;
    cell4.innerHTML = t_pressure;
    cell5.innerHTML = t_dewpoint;
    cell6.innerHTML = t_value;
    cell7.innerHTML = t_measurementscale;

    // Clear input fields
    document.getElementById("t_data").value = "";
    document.getElementById("t_time").value = "";
    document.getElementById("t_location").value = "";
    document.getElementById("t_pressure").value = "";
    document.getElementById("t_dewpoint").value = "";
    document.getElementById("t_value").value = "";
    document.getElementById("t_measurementscale").value = "";
}
