<?php
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

  echo '<div id="slideshow" class="slideshow-container">';
  foreach ($imagefilesArray as $index => $image) {
    $imagePath = $imagefolder . '/' . $image;
    echo "<div class='slide' style='display: " . ($index === $_SESSION['slide_index'] ? "block" : "none") . ";'>
            <img src='$imagePath' alt='$image' style='width: 100%; height: auto;'>
            <figcaption>$image</figcaption>
          </div>";
  }
  echo '</div>';

  foreach ($imagefilesArray as $image) {
    $imagePath = $imagefolder . '/' . $image;
    echo "<figure>";
    echo "<img src='$imagePath' alt='$image' style='width: 200px; height: auto;'><br>";  
    echo "<figcaption>$image</figcaption>";  
    echo "</figure><br>";
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
    <head>
    <link id="stylesheet" rel="stylesheet" href="./css/<?php echo $stylesheet; ?>">
        <h1>・┆✦ʚ♡ɞ✦┆・Level 6  (Part 2)・┆✦ʚ♡ɞ✦┆・</h1>
        <!--Button to change CSS!-->
        <h2>༺♥༻❤₊˚♡ Switch theme ♡˚₊❤‧༺♥༻</h2>
        <a href="?theme=light-theme.css">Light</a> | <a href="?theme=dark-theme.css">Dark</a>

   

        <h3>・┆✦ʚ♡ɞ✦┆・Total project time (6/7 levels):12hrs・┆✦ʚ♡ɞ✦┆・</h3>


    </head>
    <body>
          <p>Image Path: <?php echo $imagefolder . '/' . $current_slide; ?></p> 

        <h2>✧༺♥༻✧Sorry I am not sure why im having such a hard time w/ PHP!✧༺♥༻✧</h2>

        <h2>╔═══════════════════════════☆♡☆═════════════════════════╗</h2>
        <v class="slideshow-container">
        <?php
    
             $imageFolder = "../Technical/images/";
             $scan_dir = scandir($imageFolder);
     
             foreach($scan_dir as $img):
                     if(in_array($img,array('.','..')))
                     continue;
             ?>
             <img src="<?php echo $imageFolder.$img ?>" alt="<?php echo $img ?>">
             <?php endforeach; ?>
   
          <h2>╚══════════════════════════☆♡☆═════════════════════════╝</h2>
    </body>





</html>