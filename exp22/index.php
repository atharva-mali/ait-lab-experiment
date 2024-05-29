<?php
// Start the session
session_start();

// Set a cookie
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// Check if cookie is set and display its value
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

// Set session variables
$_SESSION["fav_color"] = "blue";
$_SESSION["fav_animal"] = "cat";

echo "<br><br>Session variables are set.";

// Display session variables
echo "<br>Favourite color is " . $_SESSION["fav_color"] . ".";
echo "<br>Favourite animal is " . $_SESSION["fav_animal"] . ".";

// Destroy the session
session_destroy();
?>
