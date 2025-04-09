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

?>
<html>
    <head>
    <link id="stylesheet" rel="stylesheet" href="../Technical/css/<?php echo $stylesheet; ?>">
    </head>
    <body>
        <h1>Creative</h1>
        <h2>Switch Theme</h2>
        <a href="?theme=light-theme.css">Light</a> | <a href="?theme=dark-theme.css">Dark</a>


        <div class="slideshow-container"
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

    </body>
</html>