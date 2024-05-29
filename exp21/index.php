<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <h2>Form Submission</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Retrieve form data using $_GET
    if(isset($_GET['name']) && isset($_GET['email'])){
        $name = $_GET['name'];
        $email = $_GET['email'];
        echo "<h3>Form data submitted using GET method:</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
    }

    // Retrieve form data using $_POST
    if(isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        echo "<h3>Form data submitted using POST method:</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
    }

    // Retrieve form data using $_REQUEST
    if(isset($_REQUEST['name']) && isset($_REQUEST['email'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        echo "<h3>Form data submitted using REQUEST method:</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
    }
    ?>
</body>
</html>
