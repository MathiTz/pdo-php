<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "Denise280600");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ? ");

$id = 2;


$stmt->execute(array($id));

//$conn->rollBack(); ele cancela o delete

$conn->commit();

echo "Dados deletados OK!";

?>