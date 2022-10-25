<!DOCTYPE html>
<html lang="en">
<head>
    <title>UG Assignment 2 - Group 16</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lukas  Formato | Kieran Mayer | Luke Crawford" />
    <script src="source-scripts\slider.js" defer></script>
    <link rel="stylesheet" href="source-styles\slider.css">
</head>
<body>
  <!-- Slideshow container -->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="source-imgs\slider-img-1.png" style="width:100%">
      <p class="img-text-upper text-fade-upper">SHOP</P>
      <p class="img-text-middle text-fade-middle">WOMANS</P>
      <p class="img-text-lower text-fade-lower">JACKETS</P>
    </div>

    <div class="mySlides fade">
      <img src="source-imgs\slider-img-2.png" style="width:100%">
      <p class="img-text-upper text-fade-upper">SHOP</P>
      <p class="img-text-middle text-fade-middle">MENS</P>
      <p class="img-text-lower text-fade-lower">SHIRTS</P>
    </div>

    <div class="mySlides fade">
      <img src="source-imgs\slider-img-3.png" style="width:100%">
      <p class="img-text-upper text-fade-upper">SHOP</P>
      <p class="img-text-middle text-fade-middle">WOMANS</P>
      <p class="img-text-lower text-fade-lower">JEANS</P>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</body>
</html>
