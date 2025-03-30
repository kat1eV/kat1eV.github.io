<?php ?>

<!--Katherine Vogt
    CSC209
    PHP Tutorials
    Tutorial: Data Types
-->

<html>
<style>
        table, th, td {
    border:2px solid black;
    align-self: center;
    }
    </style>

    <body>
        <h1>PHP Data Types </h1>

        <p> PHP supports the following data types: </p>
        <ul>
            <li>String </li>
            <li> Integer </li>
            <li> Float/ double </li>
            <li> Boolean </li>
            <li> Array </li>
            <li> Object </li>
            <li> NULL </li>
            <li> resource </li>
        </ul>

    <h2> Getting Var Data Type </h2>
    <p> We can do so by using var_dump(). Which returns the data type and value </p>

    <pre> 
        $x = 5;
        var_dump($x);
    </pre>

    <table>
        <tr>
            <th>Data Type </th>
            <th> Example </th>
            <th> Specifications (if any) </th>
        </tr>
        <tr> 
            <th>String</th>
            <th>$x="Hewwow Wurld OwO!"; </th>
        </tr>
        <tr> 
            <th>Integer</th>
            <th>$x=5985; </th>
            <th>must have at least: one digit, NO decimal, pos or neg, in dec/hex/octal/or binary </th>
        </tr>
        <tr> 
            <th>Float</th>
            <th>$x= 10.365;</th>
            <th>number with a decimal point or a number in exponential form </th>
        </tr>
        <tr> 
            <th>Boolean</th>
            <th>$x=true;  $y=false;</th>
            <th>two possible states, TRUE or FALSE </th>
        </tr>
        <tr> 
            <th>Array</th>
            <th>$x= array("Volvo","BMW","Toyota"); </th>
            <th> multiple variables </th>
        </tr>
        <tr> 
            <th>Object</th>
            <th>class x{ public $aspectOfx; public function__construct($aspectOfx){$this->aspectOfx = $aspectOfx;}public function message(){return "aspect of x: ".aspectOfx."!";}}</th>
            <th> Requires a constructor to create. Classes and Objects are primary aspects of OOP.</th>
        </tr>
        <tr>
            <th>NULL value</th>
            <th>$x= null;</th>
            <th>Has no value assigned to it</th>
        </tr>
    </table>

    <h2>Change Variable Type</h2>
    <p> You can change variable type by simply reassigning it. EX:</p>
    <pre>
        /php
        $x=123;
        var_dump($x); // will return integer

        $x="Hello!"
        var_dump($x);// will return string  
        ?/
    </pre>


    </body>

</html>