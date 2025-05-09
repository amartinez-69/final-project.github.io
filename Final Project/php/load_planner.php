<?php
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(403);
    echo json_encode([]);
    exit();
}

$user = basename($_SESSION['user']);
$filename = "../user_data/{$user}_planner.json";

if (file_exists($filename)) {
    echo file_get_contents($filename);
} else {
    echo json_encode([]); // return empty data
}
