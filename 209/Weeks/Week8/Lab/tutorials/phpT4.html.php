<?php ?>

<!--Katherine Vogt
    CSC209
    PHP Tutorials
    Tutorial: Functions
-->

<html>
    <body>
        <h1>Functions in PHP</h1>

        <p>PHP includes many built in functions. We can build something like this: </p>
        <pre> function myMessage(){
            echo "Hewwow wurld owo!";
        }</pre>

        <p>and works with a regular call:</p>
        <pre> 
            myMessage();
        </pre>

        <?php
            function myMessage(){
                echo "Hewwow wurld owo!";
            }

            myMessage();
        ?>

        <h2>Function Arguments</h2>
        <p>Information can be passed into functions via Arguments (aka. variables). They are separated by commas </p>
        <pre>
            function familyName($fname){
                echo...
            }
        </pre>
        <?php
            function familyName($fname) {
            echo "$fname Refsnes.<br>";
            }

            familyName("Jani");
            familyName("Hege");
            familyName("Stale");
            familyName("Kai Jim");
            familyName("Borge");
        ?>

        <p>PHP also recognizes returns, and arguments by refrence like so:</p>

        <pre> 
        function add_five(&$value) {
            $value += 5;
            }

            $num = 2;
            add_five($num);
            echo $num;
        </pre>

        <?php
        function add_five(&$value) {
            $value += 5;
        }
        
        $num = 2;
        add_five($num);
        echo $num;
        ?>

        <h2>Variable Number of Arguments</h2>

        <p>We can use "..." operator infront of a function parameter, the function accepts an unknown number of arguments
            This is also called a variadic function. (The argument becomes an array):
        </p>

        <pre>
            function sumMyNumbers(...$x)
        </pre>

        <p> and we can assign this to a variable like so: </p>

        <pre>
            $len = count($x);
        </pre>

        <p> Vardic funcrion must be the LAST argument in a fucntion if not the only </p>

        <pre>
        function myFamily($lastname, ...$firstname) {
            txt = "";
            for($i = 0; $i < $len; $i++) {
                $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
            }
            return $txt;
            }

        $a = myFamily("Doe", "Jane", "John", "Joey");
        echo $a;
        </pre>

        <?php
            function myFamily($lastname, ...$firstname) {
                $txt = " ";
                $len = count($firstname);
                for($i = 0; $i < $len; $i++) {
                  $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
                }
                return $txt;
              }
              
            $a = myFamily("Doe", "Jane", "John", "Joey");
            echo $a;
        ?>

    </body>
</html>