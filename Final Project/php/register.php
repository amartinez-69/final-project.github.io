<?php
$file = '../output/users.json';

$username = $_POST['username'];
$password = $_POST['password'];

$users = json_decode(file_get_contents($file), true) ?: [];

foreach ($users as $user) {
    if ($user['username'] === $username) {
        die("Username already exists.");
    }
}

$users[] = ['username' => $username, 'password' => $password];
file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

echo "Registration successful. <a href='../html/login.html'>Login here</a>";
?>
