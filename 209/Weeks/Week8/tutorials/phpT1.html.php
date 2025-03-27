<?php ?>

<!--Katherine Vogt
    CSC209
    PHP Tutorials
    Tutorial: Arrays
-->
<html>
<style>
        table, th, td {
    border:2px solid black;
    align-self: center;
    }
    </style>
<body>
   <h1> <?php echo "PHP Arrays Tutorial"?></h1>

   <h2> How to create an array:</h2>
    <pre> $variableName=array("content", "content");</pre>

    <h3> This sentence was made using array contents for the names:</h3>
   <?php
   $names=array("Katie", "Chrissy", "Gizmo");
    echo $names[0]." loves ".$names[1]." and misses ".$names[2]." very much.";
   ?>
    <br></br>
   <p>Arrays in PHP are used more like dictionaries: </p>
   <pre> 
    array( key=>value, key=> value, etc.);
   </pre>
   <h3>key:</h3> <p>specifies the key (numeric or string) </p>
   <h3>value:</h3> <p>pecifies the value</p>
   <br></br>

   <h2>Other useful aspects of Arrays in PHP </h2>
   <table>
        <tr> 
            <th>aspect</th>
            <th>use</th>
        </tr>
        <tr>
            <th>count()</th>
            <th>returns number of elements in an array </th>
        </tr>
        <tr>
            <th>key() </th>
            <th>fetches key from array</th>
        </tr>
        <tr>
            <th>list()</th>
            <th>assigns variables as if they were in an array</th>
        </tr>
        <tr>
            <th>next()</th>
            <th>advances internal array pointer</th>
        </tr>
        <tr>
            <th>prev()</th>
            <th>rewinds internal array pointer</th>
        </tr>

    </table>

    <h2> Multidimensional Arrays </h2>
    <pre>
        $array=array
        (
            array("name",value,value),
            array("name", value,value)
        );
    </pre>
    <?php
        // A two-dimensional array:
        $cars=array
        (
        array("Volvo",100,96),
        array("BMW",60,59),
        array("Toyota",110,100)
        );
    ?>


        <h1> More Intro PHP things</h1>

        <h2>comments:</h2>
        <p> // and # = single line</p>
        <p> /* */ = multiline comment</p>
        <?php
            // This is a single-line comment

            # This is also a single-line comment

            /* This is a
            multi-line comment */
        ?>
    
</body>
</html>