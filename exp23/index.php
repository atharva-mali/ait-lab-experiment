<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
</head>
<body>
    <h2>Customer Details Form</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Database connection parameters
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "exp23";

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Insert customer details into the database
        $sql = "INSERT INTO customers (name, email, phone) VALUES ('$name', '$email', '$phone')";
        if ($conn->query($sql) === TRUE) {
            echo "<h3>Customer details inserted successfully</h3>";

            // Display customer details
            echo "<h2>Customer Details</h2>";
            echo "Name: $name <br>";
            echo "Email: $email <br>";
            echo "Phone: $phone <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
