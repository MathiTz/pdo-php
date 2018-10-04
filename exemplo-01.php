<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "Denise280600");

$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

