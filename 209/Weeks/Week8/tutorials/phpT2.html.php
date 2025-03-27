<?php ?>

<!--Katherine Vogt
    CSC209
    PHP Tutorials
    Tutorial: Loops
-->
<html>
  
<body>
    <h1> <?php echo "PHP Loops Tutorial"?></h1>

    <p>We can use loops like in JS where we can loop through arrays:</p>
    
    <pre> 
        $array=array("key"=>"value",...);

        foreach($array as $x=>$x_value){
            echo "Key=" . $x . ", Value=" . $x_value;
        }
    </pre>

    <h2> Real example: </h2>


    <?php
        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

        foreach($age as $x=>$x_value)
        {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        }
    ?>

        <br> </br>
    <h2>Other loops that work w/ PHP: </h2>
    <p>while </p>
    <p>do...while</p>
    <p>for</p>
    
    <br> </br>
    <p>Examples of loops seen via "inpect" & "sources"</p>

    <?php 
    
    //WHILE
    $i = 1;
    while ($i < 6) {
    echo $i;
    $i++;
    } 

    //DO...WHILE
    $j = 1;
    do {
    echo $j;
    $j++;
    } while ($j < 6);

    //FOR
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
      }

    //FOR w/ BREAK
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) break;
        echo "The number is: $x <br>";
      }

    //FOR w/ CONTINUE
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) continue;
        echo "The number is: $x <br>";
      }

?>  

<p>break: used to jump out of a for loop</p>
<p>continue: stops current iteration in the for loop and continue with the next</p>




</body>




</html>