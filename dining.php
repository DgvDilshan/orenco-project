<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orenco</title>
    
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="dining.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;700&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    

    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">-->
</head>
<body>
    <!--Container-->
    <div class="containner">
        <!--Navigation-->
        <?php include "nav.php"; ?>
            <div class="banner">
                <div class="heading">
                    <h1>DINING</h1>
                </div>
            </div>
        </div>
        <!--End of Navigation-->

        <!--DINING-->

        <div class="split-screen">
            <div class="beach-park">
              <h2>Beach Park</h2>
              <!-- Add style attribute to change image size -->
              <img src="images/beach.JPG" alt="Beach Park Image" style="width: 100%; height: auto;">
              <p>Beach Park is a serene getaway where sun, sand, and waves embrace you in their beauty.</p>
              <a href="beachpark.php" class="button">Visit</a>
            </div>
          
            <div class="orenco">
              <h2>Amco</h2>
              <!-- Add style attribute to change image size -->
              <img src="images/amcodin.JPG" alt="Amco Image" style="width: 100%; height: 2500;">
              <p>Amco is a charming town with a rich history, welcoming you with its warmth and hospitality.</p>
              <a href="Resturant.php" class="button">Visit</a>
            </div>
          </div>
          


        <!--END OF DINING-->

    <!--Footer-->
    <?php include "footer.php"; ?>
    <!--End of Footer-->
    <!--End of Container-->
    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>