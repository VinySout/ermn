<?php

$id = $_GET['id'];
$connection = new \mysqli("localhost", "root", "sabotagem", "intranetermn");
    $stmt = $connection->prepare("DELETE FROM comandantes WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

mysqli_close($conexao);
header("location: ../views/comandantes.php");


