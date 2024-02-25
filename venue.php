<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orenco</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="venue.css">
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
                    <h1>VENUES</h1>
                </div>
            </div>
        </div>
        <!--End of Navigation-->
<!--Landing-->
<section class="landing">
    <div class="box">
        <div class="ev event-details">
            <div class="intro">
                <h1>Premium</h1> <br>
                <h2>We provides spaces for weddings, engagements, birthday parties and any event you want.</h2>
                <br><br>
                   <center> <table>
                        <tr>
                            <td><b>Capacity :&nbsp Min - 100 &nbsp &nbsp Max - 350</b></td>
                        </tr>
                    </table></center>
            </div>
        </div>
        <div class="ev event-img1">
            <img src="images/W6.jpg">
        </div>
        <div class="ev event-img2">
            <img src="images/W4.jpg">
        </div>
    </div>
    <div class="box2">
        <div class="ev event-details2">
            <div class="intro">
                <h1>Queen</h1> <br> 
                <h2>We provides spaces for weddings, engagements, birthday parties and any event you want.</h2>
                <br><br>
                   <center> <table>
                        <tr>
                            <td><b>Capacity :&nbsp Min - 100 &nbsp &nbsp Max - 375</b></td>
                        </tr>
                    </table></center>
            </div>
        </div>
        <div class="ev event-img1-1">
            <img src="images/W3.jpg">
        </div>
        <div class="ev event-img2-2">
            <img src="images/V1.jpg">
        </div>
    </div>
</section>
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