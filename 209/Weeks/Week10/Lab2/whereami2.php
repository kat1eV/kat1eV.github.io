 <!DOCTYPE html>
<?php ?>
<h1>This page figures out its whereabouts</h1>
<html>
    <head>
    <?php 
    include'../../../Week9/php/myLib.php';

    $currentPath = realpath(".");

    $weekNr = extractFolderNumber($currentPath);
    ?>

</head>

<body>
    <h1>This is work for <?= $weekMessage ?></h1>
</body>

</html>
