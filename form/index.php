<!DOCTYPE html>

<?php
include("head.php");
?>
<body>

<?php
include("header.php");
?>

<div id="carouselExampleControls" class="carousel dark slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="https://pbs.twimg.com/media/FFqIhyjVkAktkXT.jpg:large" class="d-block w-100" alt="..." width="1600" height="900">
    </div>

    <div class="carousel-item">
      <img src="https://pbs.twimg.com/media/FJmnfyeaIAQ7ldM.jpg:large" class="d-block w-100" alt="..."width="1600" height="900">
    </div>

    <div class="carousel-item">
    <a href="index.php" ><img src="https://pbs.twimg.com/media/FKKiNYqaQAAb4Jk.jpg:large" class="d-block w-100" alt="..." width="1600" height="900">
    </div></a>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

<?php
include("footer.php");
?>

</body>
</html>