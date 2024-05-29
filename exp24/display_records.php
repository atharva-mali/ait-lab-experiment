<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Registration Records</title>
</head>
<body>
    <h2>Exam Registration Records</h2>

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

    // Retrieve and display all records from the database
    $sql = "SELECT * FROM exam_registration";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Email</th><th>Exam</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["exam"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 records found";
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
