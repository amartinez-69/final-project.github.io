<?php
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(403);
    echo json_encode(["error" => "Not logged in"]);
    exit();
}

$user = $_SESSION['user'];
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['folders']) || !is_array($data['folders'])) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid folder data"]);
    exit();
}

$directory = "../output/user_data";
$filename = $directory . "/" . basename($user) . "_folders.json";

if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
}

file_put_contents($filename, json_encode(["folders" => $data['folders']], JSON_PRETTY_PRINT));

echo json_encode(["success" => true]);

