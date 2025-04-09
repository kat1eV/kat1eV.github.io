<?php
  if (isset($_GET['theme'])) {
    $_SESSION['theme'] = $_GET['theme'];
  }


  if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'light-theme.css'; // default theme
  }


  $stylesheet = $_SESSION['theme'] == 'light-theme.css' ? 'light-theme.css' : 'dark-theme.css';

  $slides = [
    '0E6632B9-D1ED-4548-858B-9370732250FA.jpeg',
    '988C9E48-AC0F-4990-9B34-97BEA25093CA.jpeg',
    'IMG_0006.JPG',
    'IMG_0088.jpeg',
    'IMG_0302.jpeg',
    'IMG_0388.jpeg',
    'IMG_2309.jpeg',
    'IMG_4113.jpeg',
    'IMG_4642.jpeg',
    'IMG_6502.jpeg',
    'IMG_7235.JPG',
    'IMG_7354.jpeg',
    'IMG_8636.jpeg',
    'IMG_8897.jpeg',
  ];


  if (!isset($_SESSION['slide_index'])) {
    $_SESSION['slide_index'] = 0;
  }

  if (isset($_GET['next'])) {
    $_SESSION['slide_index'] = ($_SESSION['slide_index'] + 1) % count($slides);
  }

  if (isset($_GET['prev'])) {
    $_SESSION['slide_index'] = ($_SESSION['slide_index'] - 1 + count($slides)) % count($slides);
  }

  $current_slide = $slides[$_SESSION['slide_index']];

    $current_slide = isset($imagefilesArray[0]) ? $imagefilesArray[0] : null;
    if ($current_slide) {
        echo "Current Image: " . $current_slide . "<br>";
    } else {
        echo "No images found.<br>";
    }


?>

<html>
    <link id="stylesheet" rel="stylesheet" href="./css/dark-theme.css">
    <head>
        <h1>・┆✦ʚ♡ɞ✦┆・Level4 (Part 2)・┆✦ʚ♡ɞ✦┆・</h1>
        <!--Button to change CSS!-->
        <h2>༺♥༻❤༺♥༻</h2>
        <button class="center" onclick="switchTheme();">‧❤₊˚♡ Switch theme ♡˚₊❤‧</button>
   

        <h3>・┆✦ʚ♡ɞ✦┆・・┆✦ʚ♡ɞ✦┆・</h3>


    </head>
    <body>
          <p>Image Path: <?php echo $imagefolder . '/' . $currentImage; ?></p> 

        

      <h2>Switch Theme:</h2>
      <a href="?theme=light-theme.css">Light</a> | <a href="?theme=dark-theme.css">Dark</a>

        <h2>╔═══════════════════════════☆♡☆═════════════════════════╗</h2>
        <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 15</div>
              <img src="../images/0E6632B9-D1ED-4548-858B-9370732250FA.jpeg" style="width:100%">
              <div class="text"></div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 15</div>
              <img src="../images/988C9E48-AC0F-4990-9B34-97BEA25093CA.jpeg" style="width:100%">
              <div class="text"></div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">3 / 15</div>
              <img src="../images/IMG_0006.JPG" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">4 / 15</div>
              <img src="../images/IMG_0088.jpeg" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">5 / 15</div>
              <img src="../images/IMG_0302.jpeg" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">6 / 15</div>
              <img src="../images/IMG_0388.jpeg" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">8 / 15</div>
              <img src="../images/IMG_2309.jpeg" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">9 / 15</div>
              <img src="../images/IMG_4113.jpeg" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">10 / 15</div>
              <img src="../images/IMG_4642.jpeg" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">11 / 15</div>
              <img src="../images/IMG_6502.jpeg" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">12 / 15</div>
              <img src="../images/IMG_7235.JPG" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">13 / 15</div>
              <img src="../images/IMG_7354.jpeg" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">14 / 15</div>
              <img src="../images/IMG_8636.jpeg" style="width:100%">
              <div class="text"></div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">15 / 15</div>
              <img src="../images/IMG_8897.jpeg" style="width:100%">
              <div class="text"></div>
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
          <h2>╚══════════════════════════☆♡☆═════════════════════════╝</h2>
    
        
          
           
        

          <h2>✧༺♥༻✧Sorry I am not sure why im havingsuch a hard time w/ PHP!✧༺♥༻✧</h2>
          <h2>❤‧̍̊·̊‧̥°̩̥˚̩̩̥͙°̩̥‧̥·̊‧̍̊❤ ♡ ❤°̩̥˚̩̩̥͙°̩̥ ·͙*̩̩͙˚̩̥̩̥*̩̩̥͙·̩̩̥͙*̩̩̥͙˚̩̥̩̥*̩̩͙‧͙ °̩̥˚̩̩̥͙°̩̥❤ ♡ ❤‧̍̊·̊‧̥°̩̥˚̩̩̥͙°̩̥‧̥·̊‧̍̊❤</h2>




    <!--javascript link-->
    <script src="./js/slideshow.js"></script>
    </body>





</html>