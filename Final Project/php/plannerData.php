<?php
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents("../output/plannerData.json", $json);
}
?>
