<?php
// Function to perform basic operations
function basicOperations($a, $b) {
    $sum = $a + $b;
    $difference = $a - $b;
    $product = $a * $b;
    $quotient = $a / $b;
    
    return array(
        'sum' => $sum,
        'difference' => $difference,
        'product' => $product,
        'quotient' => $quotient
    );
}

// Function to display array values
function displayArray($array) {
    foreach ($array as $key => $value) {
        echo "$key: $value<br>";
    }
}

// Main program
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    // Perform basic operations
    $result = basicOperations($num1, $num2);
} else {
    // Default values
    $num1 = 0;
    $num2 = 0;
    $result = array();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Basic Operations</title>
</head>
<body>
    <h2>Basic Operations</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Number 1: <input type="text" name="num1" value="<?php echo $num1;?>"><br>
        Number 2: <input type="text" name="num2" value="<?php echo $num2;?>"><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Display results if available
    if (!empty($result)) {
        echo "<h3>Results:</h3>";
        displayArray($result);
    }
    ?>

</body>
</html>
