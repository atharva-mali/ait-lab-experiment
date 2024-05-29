<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "exp20";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a new record
function createRecord($name, $email) {
    global $conn;
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Read records
function readRecords() {
    global $conn;
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}

// Update a record
function updateRecord($id, $name, $email) {
    global $conn;
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Delete a record
function deleteRecord($id) {
    global $conn;
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Example usage
createRecord("John Doe", "john@example.com");
readRecords();
updateRecord(1, "Jane Doe", "jane@example.com");
deleteRecord(1);

// Close connection
$conn->close();
?>
