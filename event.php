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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orenco</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="events.css">
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
                    <h1>Events</h1>
                </div>
            </div>
        </div>
        <!--End of Navigation-->

        <!--Landing-->
        <section class="landing">
            <div class="about-ev">
                <h1>PERFECT VENUES FOR YOUR UNFORGETTABLE EVENT</h1>
                <p>With a grand banquet hall that can house up to 1,200 guests and be segmented to smaller functions, Orenco helps you in planning your dream event. Orenco provides the best standards in service, hospitality, and dining . Conferences, cocktail parties, birthday celebrations, fine dining events, and outdoor events can all be held in Orenco's spaces.
Orenco warmly invites you to enjoy our great hospitality and leave with lifetime recollections. To discuss your event with us in person, phone us to arrange up a meeting.</p>
            </div>
        </section>

        <!--<section class="svg">
            <div class="content">
                <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#fff" fill-opacity="1" d="M0,128L20,122.7C40,117,80,107,120,112C160,117,200,139,240,165.3C280,192,320,224,360,229.3C400,235,440,213,480,181.3C520,149,560,107,600,85.3C640,64,680,64,720,96C760,128,800,192,840,192C880,192,920,128,960,122.7C1000,117,1040,171,1080,192C1120,213,1160,203,1200,192C1240,181,1280,171,1320,154.7C1360,139,1400,117,1420,106.7L1440,96L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
                </svg>
                <div class="card-container">
                    <div class="card card1" data-index="1">
                        <div class="card-img">
                            <img src="images/art8.jpg" alt="card image">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Araliya</span>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dignissimos hic, distinctio totam odit aspernatur eius est. Veritatis cupiditate error numquam quo voluptate, reiciendis laboriosam architecto illo excepturi, velit fugiat. Excepturi nulla inventore unde iure quod optio quae itaque nesciunt.</p>
                            <button class="card-btn">View More</button>
                        </div>
                    </div>
                    <div class="card card2" data-index="2">
                        <div class="card-img">
                            <img src="images/art8.jpg" alt="card image">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Araliya</span>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dignissimos hic, distinctio totam odit aspernatur eius est. Veritatis cupiditate error numquam quo voluptate, reiciendis laboriosam architecto illo excepturi, velit fugiat. Excepturi nulla inventore unde iure quod optio quae itaque nesciunt.</p>
                            <button class="card-btn">View More</button>
                        </div>
                    </div>
                    <div class="card card3" data-index="3">
                        <div class="card-img">
                            <img src="images/art8.jpg" alt="card image">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Araliya</span>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dignissimos hic, distinctio totam odit aspernatur eius est. Veritatis cupiditate error numquam quo voluptate, reiciendis laboriosam architecto illo excepturi, velit fugiat. Excepturi nulla inventore unde iure quod optio quae itaque nesciunt.</p>
                            <button class="card-btn">View More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <section class="event">
            <div class="event-content">
                <div class="box">
                    <div class="ev event-details">
                        <h2>Weddings</h2>
                        <p><b>Your happiest occasion deserves the best celebration delight in sumptuous surroundings and creates spectacular memories that will last a lifetime!</b>
                        <br> <br>
                   <b> Make your reservation today and plan your wedding the way you've always imagined.</b></p>
                        <button class="event-btn"><a href="weddings.html">Find Out More</a></button>
                    </div>
                    <div class="ev event-img1">
                        <img src="images/ew.jpg">
                    </div>
                    <div class="ev event-img2">
                        <img src="images/ew2.JPG">
                    </div>
                </div>
                <div class="box2">
                    <div class="ev event-details2">
                        <h2>Corporate  Functions</h2>
                        <p><b>Orenco provides distinctive and diverse locations to fulfill your needs, whether it's for a conference, corporate event, or annual general meeting.</b></p>
                        <button class="event-btn">Find Out More</button>
                    </div>
                    <div class="ev event-img1-1">
                        <img src="images/f1.jpg">
                    </div>
                    <div class="ev event-img2-2">
                        <img src="images/fb.jpg">
                    </div>
                </div>
                <div class="box">
                    <div class="ev event-details">
                        <h2>Venue</h2>
                        <p><b>Orenco has the capacity to meet your needs for any occasion, including upscale business events, birthday parties, and gatherings of all sizes.</b></p>
                        <button class="event-btn"><a href="venue.html">Find Out More</a></button>
                    </div>
                    <div class="ev event-img1">
                        <img src="images/ev1.jpg">
                    </div>
                    <div class="ev event-img2">
                        <img src="images/ev2.jpg">
                    </div>
                </div>
            </div>
        </section>
        <!--End of Landing-->
    </div>

    <div class="data-container">
        <form action="" method="post">
            <h1>Check Availability</h1>
            <input type="text" name="name" id="firstname" placeholder="First Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="date" name="date" id="date" placeholder="Date" required>
            <input type="time" name="time" id="time" placeholder="Time" required>
            <select id="event" name="event">
                <option value="1">Weddings</option>
                <option value="2">Events & Meetings</option>
                <option value="3">Venues</option>
            </select>
            <div class="form-container">
              <input type="submit" id="form-btn" value="Send" name="submit">
              <a href="data.php"><input id="form-btn2" value="Check" name="submit"></a>
            </div>
        </form>
    </div>

    <!--Footer-->
    <?php include "footer.php"; ?>
    <!--End of Footer-->
    <!--End of Container-->
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>