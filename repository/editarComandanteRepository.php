<?php

    
$connection = new \mysqli("localhost", "root", "", "intranetermn");  

if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['nome']) && isset($_POST['periodo'])){
$id = $_POST['id']; 
$foto = $_FILES['foto']['name'];
$nome = $_POST['nome'];
$periodo = $_POST['periodo'];
    
$ext = strtolower(strrchr($foto,"."));
$nome_atual = time().$ext;
if (!move_uploaded_file($_FILES['foto']['tmp_name'], "../img/fotosDosComandantes/".$nome_atual)) {                    
                }else {
                    echo 'Não foi Possivel Concluir o Upload da Imagem';
                }
                if (!move_uploaded_file($_FILES['foto']['tmp_name'], "../img/fotosDosComandantes/".$nome_atual)) {                    
                }else {
                    echo 'Não foi Possivel Concluir o Upload da Imagem';
                }
                
         $stmt = $connection->prepare("UPDATE comandantes SET id =?, foto=?, nome=?, periodo=? WHERE id=".$id);
            $stmt->bind_param("isss", $id, $nome_atual, $nome, $periodo);
            $stmt->execute();
          
        mysqli_close($conexao); 
        header("location: ../views/comandantes.php");
            }
}
