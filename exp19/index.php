<?php
// Starting the session
session_start();

// Setting session variables
$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'john@example.com';

// Accessing session variables
$username = $_SESSION['username'];
$email = $_SESSION['email'];

// Displaying session variables
echo "Username: $username <br>";
echo "Email: $email <br>";

// Destroying the session
session_destroy();

// Checking session status after destroying
if(session_status() === PHP_SESSION_ACTIVE){
    echo "Session is still active.";
} else {
    echo "Session has been destroyed.";
}
?>
