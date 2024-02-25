<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orenco</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;700&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
        <h1>List Of Availability</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Event</th>
                </tr>
            </thead>

            <tbody>
                <?php
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

                 $sql = "SELECT * FROM customer";
                 $result = $conn->query($sql);

                 if (!$result) {
                    die("Invalid query: " . $conn->error);
                }

                while($row = $result->fetch_assoc()){
                    $fuc_id = $row['F_Id'];

                    $query = "SELECT Function FROM function WHERE F_Id = '$fuc_id'";
                    $func_name = mysqli_query($conn, $query);
                    echo "<tr>
                    <th>" . $row["C_Id"] ."</th>
                    <th>" . $row["C_Name"] ."</th>
                    <th>" . $row["C_Email"] ."</th>
                    <th>" . $row["Date"] ."</th>
                    <th>" . $row["Time"] ."</th>
                    <th>" . $row["F_Id"] ."</th>
                </tr>";
                }
                
                ?>
            </tbody>
        </table>
</body>