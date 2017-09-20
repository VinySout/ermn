<?php

$id = $_GET['id'];
$connection = new \mysqli("localhost", "root", "sabotagem", "intranetermn");
    $stmt = $connection->prepare("DELETE FROM destaquesemestre WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

mysqli_close($conexao);
header("location: ../views/comSoc.php#destaqueRef");


