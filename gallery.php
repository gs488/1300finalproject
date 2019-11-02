<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Miyake</title>
  <link rel="stylesheet" type="text/css" href="styles/normalize.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/gallery.js"></script>
</head>

<body>
  <?php include ("includes/navigation.php"); ?>
  <p id="slideshow">Press the First Circle to Start the Slideshow</p>
      <div class="slideshow">
        <div class="mySlides fade">
          <div class="numbertext">1 / 8</div>
          <img alt="Specialty Rolls" src="images/5rolls.JPG" style="width:100%">
          <div class="text">Specialty Rolls</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">2 / 8</div>
          <img alt="Beef Bento Box" src="images/beefbento.JPG" style="width:100%">
          <div class="text">Beef Teriyaki Bento Box </div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">3 / 8</div>
          <img alt="Crazy Girl" src="images/crazygirl.JPG" style="width:100%">
          <div class="text">Crazy Girl Roll</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">4 / 8</div>
          <img alt="Katsu Don" src="images/katsudon.JPG" style="width:100%">
          <div class="text">Katsu Don</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">5 / 8</div>
          <img alt="Miso" src="images/miso.JPG" style="width:100%">
          <div class="text">Miso Soup</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">6 / 8</div>
          <img alt="Paradise" src="images/paradise.JPG" style="width:100%">
          <div class="text">Paradise Roll</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">7 / 8</div>
          <img alt="Gyoza" src="images/gyoza.JPG" style="width:100%">
          <div class="text">Beef Gyoza</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">8 / 8</div>
          <img alt="Udon" src="images/udonfront.JPG" style="width:100%">
          <div class="text">Tempura Udon</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>
      </div>
  <footer class="footer1">
    <p>Contact the Manager: Shane - yc537@cornell.edu Copyright © 2011 Miyake</p>
  </footer>
</body>
</html>
