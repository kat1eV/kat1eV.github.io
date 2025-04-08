<?php
    $imageFolder = realpath("../../../MidtermPart2/Level8/images");

    if (!$imageFolder) {
        die("The images folder path is not correct.");
    }
    
   
   $images= scandir($imageFolder);

   $imageFiles = array_filter($images, function($file) use ($imageFolder){
        $acceptedExt = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        

        return in_array(strtolower($extension), $acceptedExt) && is_file($imageFolder . '/' . $file);
    });
    $imageFilesArray =array_values($imageFiles);

    $currentSlide = isset($_GET['slide']) ? (int)$_GET['slide'] : 0;
    $currentSlide = max(0, min($currentSlide, count($imageFilesArray) - 1)); 
    $currentImage = $imageFilesArray[$currentSlide];
    ?>
<html>
<head>
<style>
        .slideshow-container {
            text-align: center;
            margin-top: 50px;
        }
        .slideshow-container img {
            max-width: 80%;
            height: auto;
            border: 2px solid #ccc;
        }
        .navigation {
            margin-top: 20px;
        }
        .navigation a {
            padding: 10px;
            text-decoration: none;
            font-weight: bold;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 10px;
        }
        .navigation a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Level 2</h1>

    <p>Image Path: <?php echo $imageFolder . '/' . $currentImage; ?></p>

    <div class="slideshow-constainer">
        <img src="<?php echo $imageFolder . '/' . $currentImage; ?>" alt="Slide Image">
    </div>

    <div class="nav">
    <a href="?slide=<?php echo $currentSlide - 1 < 0 ? count($imageFilesArray) - 1 : $currentSlide - 1; ?>">previous</a>
    <a href="?slide=<?php echo $currentSlide + 1 >= count($imageFilesArray) ? 0 : $currentSlide + 1; ?>">next</a>
    </div>
        
   
</body>
</html>