<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "Denise280600");

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID ");

$id = 1;


$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Dados deletados OK!";

?>