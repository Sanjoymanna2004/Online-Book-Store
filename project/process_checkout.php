<?php
// Database connection variables
$servername = "localhost";
$username = "root";    // Your MySQL username
$password = "";        // Your MySQL password
$dbname = "book_store";  // Database name

// Create connection to MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $receiver_name = $conn->real_escape_string($_POST['receiver_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $billing_address = $conn->real_escape_string($_POST['billing_address']);
    $sending_address = $conn->real_escape_string($_POST['sending_address']);
    $card_number = $conn->real_escape_string($_POST['card_number']);

    // SQL query to insert data into the orders table
    $sql = "INSERT INTO orders (receiver_name, email, contact, billing_address, sending_address, card_number) 
            VALUES ('$receiver_name', '$email', '$contact', '$billing_address', '$sending_address', '$card_number')";

    // Execute the query and check if the insertion was successful
    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
