<?php

$id = $_GET['id'];
$connection = new \mysqli("localhost", "root", "", "intranetermn");
    $stmt = $connection->prepare("DELETE FROM oguarapes WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    mysqli_close($conexao);
header("location: ../views/oGuarapes.php");

