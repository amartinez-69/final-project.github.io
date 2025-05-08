<?php
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(403);
    echo json_encode(["error" => "Not logged in"]);
    exit();
}

$user = $_SESSION['user'];
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['folderName']) || !is_string($data['folderName'])) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid folder name"]);
    exit();
}

// Sanitize filename
$folderName = preg_replace('/[^a-zA-Z0-9_\-]/', '_', $data['folderName']);
$directory = "../output/user_data/" . basename($user);

if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
}

$filename = $directory . "/" . $folderName . ".json";

// If it doesn't already exist, create it as empty
if (!file_exists($filename)) {
    file_put_contents($filename, json_encode(["name" => $data['folderName'], "files" => []], JSON_PRETTY_PRINT));
}

echo json_encode(["success" => true]);

