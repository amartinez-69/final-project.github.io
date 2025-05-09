<?php
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(403);
    echo json_encode(["error" => "Not logged in"]);
    exit();
}

$user = $_SESSION['user'];
$filename = "../output/user_data/" . basename($user) . "_folders.json";

if (!file_exists($filename)) {
    echo json_encode(["folders" => []]);
    exit();
}

$data = json_decode(file_get_contents($filename), true);
echo json_encode(["folders" => $data['folders'] ?? []]);
