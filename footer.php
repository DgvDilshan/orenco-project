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

<div class="footer">
        <div class="footer-gridrow">
            <div class="footer1">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="career.php">Career</a></li>
                    <li><a href="admin/login.php">Sign Up</a></li>
                </ul>
            </div>
            <div class="footer2">
                <div class="footer-gridcol">
                    <div class="footer-col1">
                        <h1>Orenco</h1>
                        <h6>Hotel & Restuarant</h6>
                        <p>Tel: 077 7255014</p>
                        <p>Fax: 077 7255014</p>
                        <p>Mob: 077 7255014</p>
                    </div>
                    <div class="footer-col2">
                        <div class="logo">
                            <a hgref="index.php"><i class="fa-solid fa-mug-hot"></i></a>
                        </div>
                        <h3>NEWSLETTER</h3>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Email Address" required><br>
                            <button type="submit">SUBSCRIBE NOW</button>
                        </form>
                        
                    </div>
                    <div class="footer-col3">
                        <h3>Join With Us</h3>
                        <div class="social-icons">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                        <p><i class="fa-light fa-copyright"></i>2023 Orenco | All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>