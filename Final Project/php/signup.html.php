
<html>
    <head>
        <link rel="stylesheet" href="../css/green.css">
        <?php function extractFolderNumber($path){
            $folderName = basename(realpath($path));
            if (preg_match('/(\d+)$/', $folderName, $matches)) {
                return (int)$matches[1];
            }
            //otherwise:
            return null;
            
        }
    ?>
    </head>
    <body>

         <form action="savedUsers.php" method="POST">
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