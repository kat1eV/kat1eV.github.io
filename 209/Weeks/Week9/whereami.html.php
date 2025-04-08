<!DOCTYPE html>
<?php ?>
<h1>This page figures out its whereabouts</h1>
<html>
    <head>
    <?php 

    echo realpath(".") ."<br/>";

    $path = realpath(".");

    echo basename($path)."<br/>";

    $weekNrString =substr($path, -1);

    echo $weekNrString;

    $weekNr;
    ?>

</head>

<body>

</body>

</html>
