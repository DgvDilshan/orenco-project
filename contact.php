<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

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
    $sql = "INSERT INTO contact (Co_Name, Co_Email, Ph_Num, Message) VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message Sent Successfully!')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orenco</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="contact.css">
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
            <div class="banner">
                <div class="heading">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        <!--End of Navigation-->

        <div class="contact-container">
            <span class="big-circle"></span>
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Let's get in touch</h3>
                    <p class="text">We value your interest in ORENCO Hotel and look forward to assisting you with any inquiries or feedback you may have. Whether you have questions about our accommodations, dining options, event spaces, or any other aspect of your stay, our dedicated team is here to help.</p>

                    <div class="info">
                        <div class="information">
                            <i class="fa-solid fa-address-book" aria-hidden="true"></i>
                            <p>379 Main St, Ambalangoda</p>
                        </div>
                        <div class="information">
                            <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                            <p>lorum123@gmail.com</p>
                        </div>
                        <div class="information">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>077 7255014</p>
                        </div>
                    </div>

                    <div class="social-media">
                        <p>Connect with us:</p>
                        <div class="social-icons-c">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>

                    <form action="" method="post">
                        <h3 class="title">Contact Us</h3>
                        <div class="input-container">
                            <input type="text" class="input" name="name">
                            <label for="">Username</label>
                            <span>Username</span>
                        </div>
                        <div class="input-container">
                            <input type="email" class="input" name="email">
                            <label for="">Email</label>
                            <span>Email</span>
                        </div>
                        <div class="input-container">
                            <input type="tel" class="input" name="phone">
                            <label for="">Phone</label>
                            <span>Phone</span>
                        </div>
                        <div class="input-container textarea">
                            <textarea name="message" class="input"></textarea>
                            <label for="">Message</label>
                            <span>Message</span>
                        </div>
                        <input type="submit" value="send" class="btn" />
                    </form>    
                </div>
            </div>
        </div>
        <script src="app.js"></script>

         <!--Footer-->
         <?php include "footer.php"; ?>
    <!--End of Footer-->
    </div>
    </body>
</html>