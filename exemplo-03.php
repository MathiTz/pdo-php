<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "Denise280600");

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";

$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";

?>