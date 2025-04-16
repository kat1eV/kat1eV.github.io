<html>
    <head>
        <?php 
         include'../../Week9/php/myLib.php';
         
     
         $currentPath = realpath(".");
     
         $weekNr = extractFolderNumber($currentPath);
         ?>

    </head>
    <body>
        <h1>Login Page (Lab2)</h1>

        <form action="./savedUsers.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" value="BSumm16"><br>
            <label for="password">Password:</label><br>
            <input type="text" id="password" name="password" value="Angel111"><br><br>
            <input type="submit" value="Submit">
          </form> 



    </body>
</html>