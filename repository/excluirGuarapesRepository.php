<?php

$conexao = mysql_connect("localhost","root", ""); // Mapeando o caminho do banco de dados
if (!$conexao) // Verificando se existe conexão com o caminho mapeado
{
die("Erro ao conectar: " . mysql_error()); // Caso o caminho esteja errado, o usuário ou a senha esteja errado, irá mostrar esta mensagem
}

mysql_select_db("intranetermn", $conexao); // Selecionando o banco de dados

$id = $_GET['id']; // Recebendo o valor enviado pelo link
echo $id;
$query = "DELETE FROM oguarapes WHERE id=".$id;
        mysql_query($query); // A instrução delete irá apagar todos os dados da id recebida

mysql_close($conexao); // Fechando a conexão com o banco de dados
header("location: ../views/oGuarapes.php");


