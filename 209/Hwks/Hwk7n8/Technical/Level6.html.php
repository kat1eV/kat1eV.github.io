<?php
session_start();
if (!isset($_SESSION['theme'])) {
  $_SESSION['theme'] = 'light-theme.css'; // default theme
}


$stylesheet = $_SESSION['theme'] == 'light-theme.css' ? 'light-theme.css' : 'dark-theme.css';
  $fullpath = realpath("./images/");
  $imagefolder = $fullpath;
  echo "Resolved path: " . $imagefolder . "<br>";
  if (is_dir($imagefolder)) {
      echo "The directory exists!";
  } else {
      echo "The directory does not exist or is not accessible!";
  }
  $images = glob($imagefolder."*");
  $acceptedExt = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
  $imagefiles = array_filter($images, function($file) use ($acceptedExt) {
      $extension = pathinfo($file, PATHINFO_EXTENSION);
      return in_array(strtolower($extension), $acceptedExt) && is_file($file);
  });
  $imagefilesArray = array_values($imagefiles);

  foreach ($imagefilesArray as $image) {
    $imagePath = $imagefolder . '/' . $image;
    echo "<figure>";
    echo "<img src='$imagePath' alt='$image' style='width: 200px; height: auto;'><br>";  
    echo "<figcaption>$image</figcaption>";  
    echo "</figure><br>";
  }
  if (!isset($_SESSION['slide_index'])) {
    $_SESSION['slide_index'] = 0;
  }
  $totalSlides = count($imagefilesArray);

  echo '<div id="slideshow" class="slideshow-container">';
  foreach ($imagefilesArray as $index => $image) {
    $imagePath = $imagefolder . '/' . $image;
    echo "<div class='slide' style='display: " . ($index === $_SESSION['slide_index'] ? "block" : "none") . ";'>
            <img src='$imagePath' alt='$image' style='width: 100%; height: auto;'>
            <figcaption>$image</figcaption>
          </div>";
  }
  echo '</div>';



?>

<html>
<link id="stylesheet" rel="stylesheet" href="./css/<?php echo $stylesheet; ?>">
    <head>
        <h1>・┆✦ʚ♡ɞ✦┆・Level 5  (Part 2)・┆✦ʚ♡ɞ✦┆・</h1>
        <!--Button to change CSS!-->
        <h2>༺♥༻❤₊˚♡ Switch theme ♡˚₊❤‧༺♥༻</h2>
        <a href="?theme=light-theme.css">Light</a> | <a href="?theme=dark-theme.css">Dark</a>

   

        <h3>・┆✦ʚ♡ɞ✦┆・・┆✦ʚ♡ɞ✦┆・</h3>


    </head>
    <body>
          <p>Image Path: <?php echo $imagefolder . '/' . $currentImage; ?></p> 

        <h2>✧༺♥༻✧Sorry I am not sure why im having such a hard time w/ PHP!✧༺♥༻✧</h2>

        <h2>╔═══════════════════════════☆♡☆═════════════════════════╗</h2>
        <v class="slideshow-container">
        <figure>
          <img src=<?php "./images/".$currentImage." "?> alt=<?php $current_slide ?> style="width: 200px; height: auto;">
          <figcaption>IMG_0006.JPG</figcaption>
        </figure>
        </v>
      

        <a href="?prev=true">&#10094; Previous</a>
        <a href="?next=true">Next &#10095;</a>
          <h2>╚══════════════════════════☆♡☆═════════════════════════╝</h2>
    </body>





</html>