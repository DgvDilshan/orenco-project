<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

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

    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // File information
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $temp_file_name = $_FILES['file']['tmp_name'];
    
        // Validate the file type
        $allowed_file_types = ['image/jpeg', 'image/png'];
        if (!in_array($file_type, $allowed_file_types)) {
            echo "Error: Invalid file type.";
            $conn->close();
            return;
        }
    
        // Validate the file size
        $max_file_size = 1000000;
        if ($file_size > $max_file_size) {
            echo "Error: File size is too large.";
            $conn->close();
            return;
        }
    
        // Move the uploaded file from the temporary location to the permanent location
        if (move_uploaded_file($temp_file_name, "img/$file_name")) {
            echo "File successfully transferred to permanent location.";
        } else {
            echo "Error transferring the file.";
        }
    } else {
        echo "Error uploading the file.";
    }

    // Use prepared statement to prevent SQL injection
    $sql = "INSERT INTO career (Fu_Name, Address, Email, Phone, image) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $address, $email, $phone, $file_name);

    if ($stmt->execute()) {
        echo "Message Sent Successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>






