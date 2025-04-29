<?php
require 'db_config.php';

$lat = $_POST['lat'];
$lng = $_POST['lng'];

$sql = "INSERT INTO pins (latitude, longitude) VALUES (:lat, :lng)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['lat' => $lat, 'lng' => $lng]);

echo json_encode(["success" => true, "id" => $pdo->lastInsertId()]);
?>