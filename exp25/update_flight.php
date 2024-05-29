<?php
// Database connection parameters
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "exp25";

// Create connection
$conn = new mysqli("localhost", "root", "", "exp25");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$flight_number = $_POST['flight_number'];
$new_departure_date = $_POST['new_departure_date'];
$new_arrival_date = $_POST['new_arrival_date'];

// Update flight information in the database
$sql = "UPDATE flights SET departure_date='$new_departure_date', arrival_date='$new_arrival_date' WHERE flight_number='$flight_number'";
if ($conn->query($sql) === TRUE) {
    echo "<h2>Flight information updated successfully</h2>";

    // Display updated flight information
    echo "<h3>Updated Flight Information</h3>";
    echo "<p>Flight Number: $flight_number</p>";
    echo "<p>New Departure Date: $new_departure_date</p>";
    echo "<p>New Arrival Date: $new_arrival_date</p>";
} else {
    echo "Error updating flight information: " . $conn->error;
}

// Close connection
$conn->close();
?>
