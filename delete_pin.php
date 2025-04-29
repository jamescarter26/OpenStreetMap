<?php
require 'db_config.php';

$id = $_POST['id'];

$sql = "DELETE FROM pins WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

echo json_encode(["success" => true]);
?>