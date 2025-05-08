<?php
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(403);
    echo json_encode(["error" => "Not logged in"]);
    exit();
}

$user = $_SESSION['user']; // This should be a unique identifier (username, user ID, etc.)
$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid JSON"]);
    exit();
}

$filename = "user_data/" . basename($user) . "_planner.json";

// Make sure the directory exists
if (!file_exists("user_data")) {
    mkdir("user_data", 0777, true);
}

// Save JSON
file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));

echo json_encode(["success" => true]);
