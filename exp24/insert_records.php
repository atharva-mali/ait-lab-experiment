<?php
// Database connection parameters
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "exp24";

// Create connection
$conn = new mysqli("localhost", "root", "", "exp24");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert 5 records into the database
for ($i = 1; $i <= 5; $i++) {
    $name = "stu $i";
    $email = "stu$i@siom.com";
    $exam = "exm $i";

    $sql = "INSERT INTO exam_registration (name, email, exam) VALUES ('$name', '$email', '$exam')";
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Redirect to display_records.php
header("Location: display_records.php");

// Close connection
$conn->close();
?>
