<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Registration Form</title>
</head>
<body>
    <h2>Exam Registration Form</h2>
    <form action="insert_records.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="exam">Exam:</label>
        <input type="text" name="exam" id="exam" required><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
