<?php
// Receive the data from the frontend
$data = json_decode(file_get_contents("php://input"), true);

if ($data && isset($data["status"])) {
    // Store the status in a database or perform other backend actions
    // For example, you can use MySQL or any other database of your choice
    $status = $data["status"];

    // Perform database operations here
    // Example: Insert the status into a table
    // $dbConnection = mysqli_connect("hostname", "username", "password", "database");
    // mysqli_query($dbConnection, "INSERT INTO status_table (status) VALUES ('$status')");
}
?>
