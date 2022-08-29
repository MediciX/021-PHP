<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image1.png" type="image/icon type">
    <title>Rov</title>
</head>
<body>
    <?php
        include("header.php")
    ?>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel"> <!-- carousel-fade-->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="8000"> <!-- data-bs-interval="4000"-->
      <img src="https://cdngarenanow-a.akamaihd.net/webth/cdn/gth/rov/non-events/official/83350e760519f7058877f4565ec5216d103799525.jpg" class="IO d-block w-100" alt="..."></div>
      <video autoplay muted loop id="Video">
            <source src="Rov1.mp4" type="video/mp4">
        </video>

    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <?php
        include("footer.php")
    ?>
</body>
</html>