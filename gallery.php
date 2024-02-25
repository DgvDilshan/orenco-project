<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orenco</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="lightbox.css">
    <link rel="stylesheet" href="jquery.flipster.min.css">
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
                    <h1>GALLERY</h1>
                </div>
            </div>
        </div>
        <!--End of Navigation-->
        <br><br>
       <!--gallery-->
       <div class="gallery-container">
        <div class="row">
            <div class="col">
                <a href="images/e1.jpg" data-lightbox="models" data-title="caption1">
                    <img src="images/e1.jpg" alt="">
                </a>
                <a href="images/e2.JPG" data-lightbox="models" data-title="caption2">
                    <img src="images/e2.JPG" alt="">
                </a>
                <a href="images/g4.jpg" data-lightbox="models" data-title="caption3">
                    <img src="images/g4.jpg" alt="">
                </a>
                <a href="images/g5.jpg" data-lightbox="models" data-title="caption4">
                    <img src="images/g5.jpg" alt="">
                </a>
                <a href="images/W1.JPG" data-lightbox="models" data-title="caption5">
                    <img src="images/W1.JPG" alt="">
                </a>
            </div>

            <div class="col">
                <a href="images/g1.jpg" data-lightbox="models" data-title="caption6">
                    <img src="images/g1.jpg" alt="">
                </a>
                <a href="images/g6.jpg" data-lightbox="models" data-title="caption7">
                    <img src="images/g6.jpeg" alt="">
                </a>
                <a href="images/v2.JPG" data-lightbox="models" data-title="caption8">
                    <img src="images/v2.JPG" alt="">
                </a>
                <a href="images/W2.JPG" data-lightbox="models" data-title="caption9">
                    <img src="images/W2.JPG" alt="">
                </a>
                <a href="images/g10.jpeg" data-lightbox="models" data-title="caption10">
                    <img src="images/g10.jpeg" alt="">
                </a>
            </div>

            <div class="col">
                <a href="images/ww1.JPG" data-lightbox="models" data-title="caption11">
                    <img src="images/ww1.JPG" alt="">
                </a>
                <a href="images/g11.JPG" data-lightbox="models" data-title="caption12">
                    <img src="images/g11.JPG" alt="">
                </a>
                
                <a href="images/g12.jpeg" data-lightbox="models" data-title="caption14">
                    <img src="images/g12.jpeg" alt="">
                </a>
                <a href="images/g13.JPG" data-lightbox="models" data-title="caption15">
                    <img src="images/g13.JPG" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="gallery-img">
        <div class="gallery">
            <div class="img-bx"><h3>Orenco</h3></div>
            <div class="img-bx"><h3>Orenco</h3></div>
            <div class="img-bx"><h3>Orenco</h3></div>
            <div class="img-bx"><h3>Orenco</h3></div>
            <div class="img-bx"><h3>Orenco</h3></div>
        </div>
    </div>
    <!--End of gallery-->

        <!--Footer-->
        <?php include "footer.php"; ?>
    <!--End of Footer-->
    <!--End of Container-->
    
    <script src="lightbox-plus-jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>