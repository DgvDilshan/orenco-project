<?php
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $event = $_POST["event"];

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
    $sql = "INSERT INTO customer (C_Name, C_Email, Date, Time, F_Id) VALUES ('$name', '$email', '$date', '$time', '$event')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message Sent Successfully!')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
