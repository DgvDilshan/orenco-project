<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];

    // TODO: Perform form data validation here

    // Database configuration
    $servername = "localhost";        // Use 'localhost' or IP address
    $db_username = "root";               // Use 'root' with all lowercase letters
    $db_password = ""; // Replace with your actual database password
    $dbname = "orenco";                // Replace with the correct database name

    // Create a connection to the database
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO newsletter (N_Email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message Sent Successfully!')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>