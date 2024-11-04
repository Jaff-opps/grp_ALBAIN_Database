
<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bike_shop_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data exists to avoid Undefined Array Key warnings
$fullName = isset($_POST['fullname']) ? $_POST['fullname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$product = isset($_POST['product']) ? $_POST['product'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
$payment = isset($_POST['payment_method']) ? $_POST['payment_method'] : '';

// SQL query to insert data into the transactions table
$sql = "INSERT INTO transactions (fullname, email, phone, address, product, quantity, payment_method) 
VALUES ('$fullName', '$email', '$phone', '$address', '$product', '$quantity', '$payment')";


if ($conn->query($sql) === TRUE) {
    echo "Transaction submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
