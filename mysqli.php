<?php
// Connecting to the database
$conn = new mysqli($database_host, $database_user, $database_password, $database_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// Updating information in the database using PHP variables

$yourVCariable = "Hello world!";
$anotherVariable = 123;

$sql_querry = "UPDATE tableNAME SET tableVariableNAME = '$yourVCariable', anotherTableVariable = '$anotherVariable'";
        if ($conn->query($sql_querry) === TRUE) {
            echo "Successfully updated database record. ";
        } else {
            echo "Error updating record: " . $conn->error;
        }
$conn->close();

// Retrieve data from Database into PHP variables

$sql_querry = "SELECT tableVariableNAME FROM tableNAME where variableID = '1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $yourVCariable = $row["tableVariableNAME"];    
    }
    } else {
        echo "Found 0 results";
    }

$conn->close();
?>
