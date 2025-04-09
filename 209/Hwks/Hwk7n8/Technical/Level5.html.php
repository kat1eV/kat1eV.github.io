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
  $currentImage = isset($imagefilesArray[0]) ? $imagefilesArray[0] : null;
  if ($currentImage) {
      echo "Current Image: " . $currentImage . "<br>";
  } else {
      echo "No images found.<br>";
  }
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
        <?php
    
             $imageFolder = "../Technical/images/";
             $scan_dir = scandir($imageFolder);
     
             foreach($scan_dir as $img):
                     if(in_array($img,array('.','..')))
                     continue;
             ?>
             <img src="<?php echo $imageFolder.$img ?>" alt="<?php echo $img ?>">
             <?php endforeach; ?>
   
      

        <a href="?prev=true">&#10094; Previous</a>
        <a href="?next=true">Next &#10095;</a>
          <h2>╚══════════════════════════☆♡☆═════════════════════════╝</h2>
    </body>





</html>