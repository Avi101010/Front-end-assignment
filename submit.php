<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codigo_assignment";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process AJAX form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $phone = $_POST["phone_number"];
    $email = $_POST["email"];
    $about = $_POST["about"];

    // Insert data into the database
    $sql = "INSERT INTO user_data (first_name, last_name, phone, email, about) VALUES ('$firstName', '$lastName', '$phone', '$email', '$about')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
}

$conn->close();
?>
