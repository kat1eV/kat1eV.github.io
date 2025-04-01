<?php ?>

<!--Katherine Vogt
    CSC209
    PHP Tutorials
    Tutorial: Date & Time
-->

<html>
    <head>

    </head>
    <body>
        <h1>PHP Date & Time</h1>

        <pre>
            date(format, timestamp);
    </pre>
    <p>format: required, specifies format of timestamp </p>
    <p> timestamp: optional, specifies timestamp, default is current date & time</p>

    <h2> Get a Date </h2>
    <p><b>Characters often used for dates:</b></p>
   
    <p>d : day of the month </p>
    <p> m : month </p>
    <p> Y : year in 4 digits </p>
    <p> l (lowercase 'L'): day of the week </p>
    <p> Characters such as / . , or - can be added for additional formatting <p>
        
    <pre>
        EX:
        date("Y/m/d")
        date("Y.m.d")
        date("Y-m-d")
        echo "Today is " . date("l");
    </pre>
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    ?>
        <br></br>

    <h2>Get a Time</h2>
    <p><b>Characters often used for times:</b></p>

    <p>H : 24 hour format (00-23)</p>
    <p>h : 12 hour format </p>
    <p>i : minutes with leading zeros (00-59) </p>
    <p>s : seconds with leading zeros (00-59) </p>
    <p>a : lowercase am or pm </p>
        
    <pre>
        EX:
        echo "The time is " . date("h:i:sa");
    </pre>

    <?php
    echo "The time is " . date("h:i:sa");
    ?>

    <h2> Get your Timezone </h2>
    <pre>
        date_default_timezone_set("America/New_York");
    </pre>
    <?php
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");
    ?>
        <br></br>

    <h2>Create a Date </h2>
    <p> The mktime() function in PHP returns a Unix timestamp for a date. </p>
    <p>The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified. </p>

    <pre>
        mktime(hour, minute, second, month, day, year)
    </pre>
    <p> You can also create a date and time with the <b>date()</b> function</p>
    <pre>
        $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    </pre>
    <?php
    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>

    <p>Another way to create a date is with <b>strtotime()</b></p>
    <pre>
    SYNTAX: strtotime(time, now)
    EX: 
        $d=strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
    </pre>
    <?php
    $d=strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>

    <p>You can also convert a <b>string</b> to a date </p>
    <pre>
        $d=strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $d); 

        $d=strtotime("next Saturday");
        echo date("Y-m-d h:i:sa", $d); 

        $d=strtotime("+3 Months");
        echo date("Y-m-d h:i:sa", $d); 
    </pre>
    <?php
    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    
    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    
    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    ?>
    <br></br>
    <a href="https://www.w3schools.com/php/php_ref_date.asp">PHP Date Refrence</a>



    </body>


</html>