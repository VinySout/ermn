<?php

header('Content-Type: text/html; charset=utf-8',true);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$username = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$password = filter_input(INPUT_POST, "senha", FILTER_UNSAFE_RAW);

if ($username && $password) {
  try {
    $connection = new \mysqli("localhost", "root", "", "intranetermn");
    $stmt = $connection->prepare("SELECT `id`, `senha` FROM `usuarios` WHERE `usuario` = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $hash);
    $found = $stmt->fetch();
    if ($found === true && md5($password) === $hash) {      
              session_start();
              $_SESSION['usuarioID'] = $id;
              $_SESSION['usuarioNome'] = $username;              
              header("Location: ../index.php");
        }
    else {
        echo "Usuário ou Senha invalidos";
        header("refresh:3;url=../index.php");
    }
    $stmt->close();
    $connection->close();
  }
  catch (\mysqli_sql_exception $e) {
    echo "An error ocurred while communicating with the database, please hang in there until it's fixed.";
  }
}
else {
  echo "Para realizar o login é necessário inserir usuário e senha.";
  header("refresh:3;url=../index.php");
}