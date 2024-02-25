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
        $allowed_file_types = ['image/jpeg', 'image/png', 'image/jpg'];
        if (!in_array($file_type, $allowed_file_types)) {
            echo "<script>alert('Error: Invalid file type.')</script>";
            $conn->close();
            return;
        }
    
        // Validate the file size
        $max_file_size = 1000000;
        if ($file_size > $max_file_size) {
            echo "<script>alert('Error: File size is too large.')</script>";
            $conn->close();
            return;
        }
    
        // Move the uploaded file from the temporary location to the permanent location
        if (move_uploaded_file($temp_file_name, "img/$file_name")) {
            echo "<script>alert('File successfully transferred to permanent location.')</script>";
        } else {
            echo "<script>alert('Error transferring the file.')</script>";
        }
    } else {
        echo "<script>alert('Error uploading the file.')</script>";
    }

    // Use prepared statement to prevent SQL injection
    $sql = "INSERT INTO career (Fu_Name, Address, Email, Phone, image) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $address, $email, $phone, $file_name);

    if ($stmt->execute()) {
        echo "<script>alert('Message Sent Successfully!')</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orenco</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="career.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;700&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">-->
</head>
<body>
    <!--Container-->
    <div class="containner">
        <!--Navigation-->
        <?php include "nav.php"; ?>
        <!--End of Navigation-->

        <!--Landing-->
        <div class="main">
        <div class="career">  
            <h2>Career Form</h2>
            <form id="career" method="post" action="" enctype="multipart/form-data">
                <label>Full Name :</label>
                <br>
                <input type="text" name="name" id="name" placeholder="Enter Your Full Name">
                <br><br>
                <label>Address :</label>
                <br>
                <input type="text" name="address" id="name" placeholder="Enter Your Address">
                <br><br>
                <label>Email :</label>
                <br>
                <input type="email" name="email" id="name" placeholder="Enter your Valid Email">
                <br><br>
                <label>Telephone :</label>
                <br>
                <input type="text" name="phone" id="name" placeholder="Enter Your Number">
                <br><br>
                <label>Upload Resume :</label>
                <br>
                <input type="file" name="file" onchange="fileUploaded()" />
                <br>
                <label>Please upload file with jpg, jpeg, png format (max-file-size 2MB)</label>
                <br><br>
                <input type="submit" value="Send" id="send">
            </form>
        </div>
        </div>
        <br><br><br><br><br><br>
        
        <!--end of Landing-->

        <!--Footer-->
        <?php include "footer.php"; ?>
    <!--End of Footer-->
    <!--End of Container-->
    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>