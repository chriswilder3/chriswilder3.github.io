<?php
// Simulated database connection
$dbConnection = mysqli_connect("hostname", "username", "password", "database");

// Receive the data from the frontend
$data = json_decode(file_get_contents("php://input"), true);

if ($data && isset($data["status"])) {
    $status = $data["status"];

    // Store the status in the database (simplified example)
    mysqli_query($dbConnection, "INSERT INTO status_table (status) VALUES ('$status')");

    // Prepare response data
    $responseData = [
        "status" => $status,
        "color" => getStatusColor($status)
    ];

    echo json_encode($responseData);
} else {
    echo json_encode(["error" => "Invalid data"]);
}

function getStatusColor($status) {
    switch ($status) {
        case "unanswered":
            return "red";
        case "partial":
            return "yellow";
        case "answered":
            return "green";
        default:
            return "black";
    }
}
?>
