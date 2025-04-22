
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
          </form> 

          <button onclick="location.href='admin.html.php'"> Im an Admin</button>

        <!-- login

        if username Y but password N
            •"Wrong Password"
        if username N 
            •"User not found"
        if username Y and password Y
            •sign in successfully
    

            if user exists:
                check password 
                    if N: wrong password
                    if Y: sign in
            else: "user not found"
    
    -->

    </body>
</html>