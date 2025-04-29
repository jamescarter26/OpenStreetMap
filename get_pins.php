<?php
require 'db_config.php';

$stmt = $pdo->query("SELECT * FROM pins");
$pins = $stmt->fetchAll();

echo json_encode($pins);
?>