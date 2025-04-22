<html>
<h2>Welcome <?php echo $_POST["username"]; ?></h2><br>

<h2>Your password is: <?php echo $_POST["password"]; ?></h2><br>
<?php 

    $user = $_POST["username"];
    $pass = $_POST["password"];

    if(file_exists("../output/users.JSON")==true){//if file exists:
        $var = file_get_contents("../output/users.JSON");
        $var= json_decode($var);
        array_push($var,$_POST);
        $var = json_encode($var);

        $file = fopen("../output/users.JSON", "w+");
        fwrite($file, $var);
        fclose($file);

    }else{
        $file = fopen("../output/users.JSON", "w");
        $Jline = json_encode($_POST);
        fwrite($file, "[".$Jline."]");
        fclose($file);
    }
    

?>
</html>