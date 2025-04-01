<?php ?>

<!--Katherine Vogt
    CSC209
    PHP Tutorials
    Tutorial: Include
-->

<html>
    <head>

    </head>
    <body>
        <h1>PHP Include</h1>
        <p>Include (or require) takes all the text/code/markup that exists in the specified files and copies it into the file</p>
        <p>that uses the include statement </p>
        <br></br>
        <p>You can insert the ontent of one PHP file into another PHP file (before the server executes), with the include or require statement</p>
        <p>The only difference between <b>inlcude</b> and <b>require</b> is their error messages</p>
        <ul>
            <li><b>require</b>: will produce the fatal error (E_COMPILE_ERROR) and stop the script</li>
            <li><b>include</b>: will only produce a warning (E_WARNING) and the script will continue</li>
        </ul>
        <pre>
            SYNTAX:
            include 'filename';
                    or
            require 'filename';
        </pre>

        <h2>Include Examples</h2>
        <p>Assume we have a standard footer:</p>
        <pre>
        echo "p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com/p>";
        <p>To include it in the footer file in the page:</p>
        <pre>
            h1; welcome to my page!
            p; some text
            php: include 'footer.php';

    </body>


</html>