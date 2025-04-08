<?php
    $imageFolder = realpath("../Technical/images");
    
   
   $images= scandir($imageFolder);

   $imageFiles = array_filter($images, function($file) use ($imageFolder){
        $acceptedExt = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        

        return in_array(strtolower($extension), $acceptedExt) && is_file($imageFolder . '/' . $file);
    });
    $imageFilesArray = json_encode(array_values($imageFiles));
    ?>
<html>
<head>
<style>
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .image-gallery img {
            margin: 10px;
            max-width: 20px;
            max-height: 20px;
        }
    </style>
</head>
<body>
    <h1>Level 1</h1>
    <div class="images" id="image-Gal"></div>
        <script>
           const imageFiles = <?php echo $imageFilesArray; ?>;

           const gallery = document.getElementById('image-Gal');

           imageFiles.forEach(image => {
                const imgElement = document.createElement('img');
                imgElement.src = 'images/' + image;  
                imgElement.alt = image;  
                gallery.appendChild(imgElement); 
            });
        </script>
   
</body>
</html>