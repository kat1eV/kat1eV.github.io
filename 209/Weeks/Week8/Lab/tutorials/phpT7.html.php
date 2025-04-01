<?php ?>

<!--Katherine Vogt
    CSC209
    PHP Tutorials
    Tutorial: File Handling
-->

<html>
    <head>
        <style>
                table, th, td {
            border:2px solid black;
            align-self: center;
            }
        </style>

    </head>
    <body>
        <h1>PHP File Handling</h1>
        <p> PHP can manipulate files by creating, reading, uploading and editing them </p>

        <h2>PHP readfile() Function </h2>
        <p><b>readfile()</b> reads in a file and writes it to the output buffer.</p>
        <p> If we wanted to access a text file we had called <b>webdictionary.txt</b> that is stored on our server, we can do the following:</p>
        <pre>
            php: echo readfile("webdictionary.txt");
        </pre>
        <p>This is perfect for opening a file if you only want to read its contents</p>
        <br></br>

        <h2>PHP fopen() Function</h2>
        <p><b>fopen()</b> also opens a file but provides you with more options than readfile()</p>
        <pre>
            fopen("fileName.txt", x);
        </pre>
        <p><b>x</b> can be any of the following letters to represent their corresponding actions</p>
        <table>
            <tr>
                <td>Mode</td>
                <td>Description</td>
            </tr>
            <tr>
                <td><b>r</b></td>
                <td>Open a file for read only. File pointer starts at begining of the file</td>
            </tr>
            <tr>
                <td><b>w</b></td>
                <td>Open a file for write only. Erases contents if already exists, or creates a new file. File pointer starts at begining of the file.</td>
            </tr>
            <tr>
                <td><b>a</b></td>
                <td>Open a file for write only. File contents are preserved if file already exists. File pointer begins at the end of the file. Creates a new file if non-existant</td>
            </tr>
            <tr>
                <td><b>x</b></td>
                <td>Creates a new file for write only. Returns FALSE and an error if file already exists.</td>
            </tr>
            <tr>
                <td><b>r+</b></td>
                <td>Open a file to read/write. File pointer starts at begining of file</td>
            </tr>
            <tr>
                <td><b>w+</b></td>
                <td>Open a file for read/write. Erases contents or creates a new file. File pointer starts at begining of the file </td>
            </tr>
            <tr>
                <td><b>a+</b></td>
                <td>Open a file for read/write. Existing data is preserved or file is created. File pointer starts at the end of the file</td>
            </tr>
            <tr>
                <td><b>x+</b></td>
                <td>Creates a new file for read/write. Returns FALSE and an error if file already exists.</td>
            </tr>
        </table>
            <br></br>

        <h2>PHP fread() Function </h2>
        <p><b>fread()</b> reads from an open file</p>
        <pre>
            fread(fileName.txt, fileSize("fileName.txt"));
        </pre>
        <br></br>

        <h2>PHP fclose() Function </h2>
        <p><b>fclose()</b> is used to close a file previously opened. This is good programming practice.</p>
        <pre>
            fclose(fileName.txt);
        </pre>
        <br></br>
        
        <h2>PHP fgets() Function </h2>
        <p><b>fgets()</b> reads from a single line from a file.</p>
        <pre>
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        <b>echo fgets($myfile);</b>
        fclose($myfile);
        </pre>
        <p>after fgets() has been called and done, file pointer moves to the next line.</p>
        <br></br>

        <h2>PHP feof() Function </h2>
        <p><b>feof()</b> checks for "end-of-file". Useful for looping through a file of unknown length</p>
        <pre>
        while(!feof($myfile)) {
            echo fgets($myfile) ;
            }
        </pre>
        <br></br>

        <h2>PHP fgetc() Function </h2>
        <p><b>fgetc()</b> reads a single charater from a line</p>
        <pre>
        echo fgetc("fileName.txt");
        </pre>
        <p>after fgetc() has been called and done, file pointer moves to the next line.</p>
        <br></br>

        <h1>PHP File Create & Write </h1>
        <h2>PHP Create a File- fopen()</h2>
        <p>we can use <b>fopen()</b> to create a new file to then open. </p>
        <br></br>
        
        <h2>PHP File Permissions</h2>
        <p>If you are having errors when trying to get this code to run, check that you have granted your PHP file access to write information to the hard drive.</p>
        <br></br>

        <h2>PHP fwrite() Function </h2>
        <p> <b>fwrite()</b> is used to write to a file </p>
        <p>The following writes the names to a new file (the same one) </p>
        <pre>
            $txt = "John Doe\n";
            fwrite("fileName" $txt);
            $txt = "Jane Doe\n";
            fwrite("fileName" $txt);
        </pre>
        <br></br>

        <h2>PHP Overwriting </h2>
        <p>When we open an existing file for writing all the existing data is erased. </p>
        <br></br>

        <h2>PHP Append </h2>
        <p>We can append data to a file using <b>a</b> mode. <b>w</b> mode would override the file</p>
        <p>The following appends data to newfile: </p>
        <pre>
        $myfile = fopen("newfile.txt", <b>"a"</b>) or die("Unable to open file!");
        $txt = "Donald Duck\n";
        fwrite($myfile, $txt);
        $txt = "Goofy Goof\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        </pre>
        <br></br>

        <a href="https://www.w3schools.com/php/php_ref_filesystem.asp">PHP Filesystem Refrence</a>



        





    </body>


</html>