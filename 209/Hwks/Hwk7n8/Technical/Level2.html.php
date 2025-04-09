<?php
    $fullpath = realpath("./images");
    
    
    $imagefolder = $fullpath;
    echo "Resolved path: " . $imagefolder . "<br>";
    if (is_dir($imagefolder)) {
        echo "The directory exists!";
    } else {
        echo "The directory does not exist or is not accessible!";
    }
    $images = glob($imagefolder . '/*');
    $imagefiles = array_filter($images, function($file) use ($imagefolder) {
        $acceptedExt = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        return in_array(strtolower($extension), $acceptedExt) && is_file($imagefolder . '/' . $file);
        $imagefilesArray = array_values($imagefiles);
        $currentImage = isset($imagefilesArray[0]) ? $imagefilesArray[0] : null;
        if ($currentImage) {
            echo "Current Image: " . $currentImage . "\n";
        }
    });
    $currentImage = isset($imagefilesArray[0]) ? $imagefilesArray[0] : null;
    

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
    <p><b>I dont know why the images wont come up!!!!! </b></p>

    <p>Image Path: <?php echo $imagefolder . '/' . $currentImage; ?></p> 

   <div class="slideshow-container">
   <?php
    
    $imageFolder = "../Technical/images/";
    $scan_dir = scandir($imageFolder);

    foreach($scan_dir as $img):
            if(in_array($img,array('.','..')))
            continue;
    ?>
    <img src="<?php echo $imageFolder.$img ?>" alt="<?php echo $img ?>">
    <?php endforeach; ?>

    </div>

    <div class="nav">
    <a href="?slide=<?php echo $currentSlide - 1 < 0 ? count($imagefilesArray) - 1 : $currentSlide - 1; ?>">previous</a>
    <a href="?slide=<?php echo $currentSlide + 1 >= count($imagefilesArray) ? 0 : $currentSlide + 1; ?>">next</a>
    </div>
    
        
   
</body>
</html>