
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orenco</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="room.css">
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
                    <h1>Rooms</h1>
                </div>
            </div>
        </div>
        <!--End of Navigation-->

    <!--Landing-->
    <section class="landing">
        <div class="about-ev">
            <h1>THE PERFECT BEACHSIDE ESCAPE</h1>
            <p>We offer 6 modern guest rooms that fit the grandeur of your lifestyle.Our guest rooms are a perfect balance of comfort, elegance and style.</p>
        </div>
    </section>
    <div class="box">
        <div class="ev event-details">
            <div class="intro">
                <h1>Standard</h1> <br> 
                   <center> <table>
                        <tr><td><b>Beds</b> : King-sized or Twin</td></tr>
                        <tr><td><b>Ground Space</b> : 250 Sq. ft.</td></tr>
                        <tr><td><b>Occupancy </b>: Single/Double</td></tr>
                        <tr><td><b>Extra Bed </b>: No </td></tr>
                        <tr><td><b>Bathrooms  </b>: Luxury </td></tr>
                    </table></center>
            </div>
        </div>
        <div class="ev event-img1">
            <img src="images/r7.jpeg">
        </div>
        <div class="ev event-img2">
            <img src="images/r8.jpeg">
        </div>
    </div>
    <div class="box2">
        <div class="ev event-details2">
            <div class="intro">
                <h1>Deluxe</h1> <br> 
                   <center> <table>
                        <tr><td><b>Beds</b> : King-sized or Twin</td></tr>
                        <tr><td><b>Ground Space</b> : 500 Sq. ft.</td></tr>
                        <tr><td><b>Occupancy </b>: Single/Double/triple</td></tr>
                        <tr><td><b>Extra Bed </b>: On Request </td></tr>
                        <tr><td><b>Bathrooms  </b>: Luxury </td></tr>
                    </table></center>
            </div>
        </div>
        <div class="ev event-img1-1">
            <img src="images/r2.jpeg">
        </div>
        <div class="ev event-img2-2">
            <img src="images/r5.jpeg">
        </div>
    </div>

    <!--<div class="box">
        <div class="ev event-details3">
            <div class="intro">
                <h1>Executive</h1><br> 
                   <center> <table>
                        <tr><td><b>Beds</b> : King-sized or Twin</td></tr>
                        <tr><td><b>Ground Space</b> : 550 Sq. ft.</td></tr>
                        <tr><td><b>Occupancy </b>: Single/Double/Triple</td></tr>
                        <tr><td><b>Extra Bed </b>: On Request</td></tr>
                        <tr><td><b>Bathrooms  </b>: Luxury </td></tr>
                    </table></center>
            </div>
        </div>
        <div class="ev event-img1-3">
            <img src="images/rr1.jpg">
        </div>
        <div class="ev event-img2-4">
            <img src="images/rr2.jpg">
        </div>
    </div>-->
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