<?php


    
$conexao = mysql_connect("localhost","root", ""); 
if (!$conexao){
    die("Erro ao conectar: " . mysql_error());
}
mysql_select_db("intranetermn", $conexao);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['nome']) && isset($_POST['usuario'])){
$id = htmlspecialchars($_POST['id']);
$nome = htmlspecialchars($_POST['nome']);
$usuario = htmlspecialchars($_POST['usuario']);
$descricao = htmlspecialchars($_POST['descricao']);
$sData = htmlspecialchars($_POST['sData']);
$infPc = htmlspecialchars($_POST['infPc']);
$infPc2 = htmlspecialchars($_POST['infPc2']);
$providenciado = htmlspecialchars($_POST['providenciado']);
$solucao = htmlspecialchars($_POST['solucao']);
$substituicao = htmlspecialchars($_POST['substituicao']);
$itemDesc = htmlspecialchars($_POST['itemDesc']);
    
        $query = "UPDATE chamadosti SET id ='$id', nome='$nome', usuario='$usuario', descricao='$descricao', sdata='$sData', infpc='$infPc', infpc2='$infPc2', providenciado='$providenciado', solucao='$solucao', substituicao='$substituicao', itemdesc='$itemDesc' WHERE id=".$id;
        mysql_query($query); 
        mysql_close($conexao); 
        header("location: ../views/sti.php");
            }
}
