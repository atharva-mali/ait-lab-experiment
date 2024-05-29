<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Rescheduling Form</title>
</head>
<body>
    <h2>Flight Rescheduling Form</h2>
    <form action="update_flight.php" method="post">
        <label for="flight_number">Flight Number:</label>
        <input type="text" name="flight_number" id="flight_number" required><br><br>
        <label for="new_departure_date">New Departure Date:</label>
        <input type="date" name="new_departure_date" id="new_departure_date" required><br><br>
        <label for="new_arrival_date">New Arrival Date:</label>
        <input type="date" name="new_arrival_date" id="new_arrival_date" required><br><br>
        <input type="submit" name="submit" value="Reschedule">
    </form>
</body>
</html>
