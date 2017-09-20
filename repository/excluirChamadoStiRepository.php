<?php


$id = $_GET['id'];
$connection = new \mysqli("localhost", "root", "sabotagem", "intranetermn");
    $stmt = $connection->prepare("DELETE FROM chamadosti WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

mysqli_close($conexao); // Fechando a conexão com o banco de dados
header("location: ../views/sti.php#stiRef");
