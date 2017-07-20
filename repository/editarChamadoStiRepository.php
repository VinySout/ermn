<?php
$connection = new \mysqli("localhost", "root", "", "intranetermn");

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
        
        
            $stmt = $connection->prepare("UPDATE chamadosti SET id =?, nome=?, usuario=?, descricao=?, sdata=?, infpc=?, infpc2=?, providenciado=?, solucao=?, substituicao=?, itemdesc=? WHERE id=".$id);
            $stmt->bind_param("issssssssss", $id, $nome, $usuario, $descricao, $sData, $infPc, $infPc2, $providenciado, $solucao, $substituicao, $itemDesc);
            $stmt->execute();
            
            mysqli_close($connection);
        header("location: ../views/sti.php");
            }
}
