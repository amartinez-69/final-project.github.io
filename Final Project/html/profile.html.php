<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}

$usersFile = '../output/users.json';
$users = json_decode(file_get_contents($usersFile), true);
$currentUsername = $_SESSION['user'];
$currentUserIndex = null;

// Find user by username
foreach ($users as $index => $user) {
    if ($user['username'] === $currentUsername) {
        $currentUserIndex = $index;
        break;
    }
}

if ($currentUserIndex === null) {
    die("User not found.");
}

$message = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = trim($_POST['username']);
    $newPassword = trim($_POST['password']);

    // Check if new username already exists (and is not the current user)
    if ($newUsername !== $currentUsername) {
        foreach ($users as $user) {
            if ($user['username'] === $newUsername) {
                $message = "Username already taken.";
                break;
            }
        }
    }

    if (!$message) {
        if (!empty($newUsername)) {
            $users[$currentUserIndex]['username'] = $newUsername;
            $_SESSION['user'] = $newUsername;
        }

        if (!empty($newPassword)) {
            $users[$currentUserIndex]['password'] = $newPassword;
        }

        file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));
        $message = "Profile updated successfully!";
    }
}

$currentUser = $users[$currentUserIndex];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../green.css">
</head>
<body>
<h1>Profile Settings</h1>
<button action="../php/logout.html.php"><a href="demoPage.html.php">Log Out</a></button>
<p>Change your username or password on this page. Leave blank to keep current profile settings.</p>

<?php if (!empty($message)) echo "<p>$message</p>"; ?>

<div class="center" style="width: 500px;">
<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" value="<?= htmlspecialchars($currentUser['username']) ?>"><br><br>
    <label>New Password:</label><br>
    <input type="text" name="password"><br><br>
    <input type="submit" value="Update Profile">
</form>
<a href="../html/mainPage.html.php">Back to Home</a>
</div> 
</body>
</html>
