<?php
session_start();
$file = '../output/users.json';

$username = $_POST['username'];
$password = $_POST['password'];

$users = json_decode(file_get_contents($file), true);

foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
        $_SESSION['user'] = $username;
        header("Location: ../html/mainPage.html.php");
        exit();
    }
}

echo "Invalid username or password.";
?>
