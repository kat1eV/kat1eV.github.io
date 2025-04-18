<html>
    <head>
    <link rel="stylesheet" href="../css/logins.css">

        <?php 
         include'../../../Weeks/Week9/php/myLib.php';
         
         $currentPath = realpath(".");
     
         $weekNr = extractFolderNumber($currentPath);
         ?>

    </head>
    <body>
        <h1>Login Page Homework 9
        </h1>

        <form action="./savedUsers.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" value=""><br>
            <label for="password">Password:</label><br>
            <input type="text" id="password" name="password" value=""><br><br>
            <input type="submit" value="Submit"><br><br>
            <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
          </form> 

          <button onclick="location.href='admin.html.php'"> Im an Admin</button>



    </body>
</html>