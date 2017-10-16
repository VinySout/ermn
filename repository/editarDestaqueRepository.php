<?php

$connection = new \mysqli("localhost", "root", "sabotagem", "intranetermn");    

if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_FILES['img'])){

                $id = htmlspecialchars($_POST['id']);
                $uploadfile = $_FILES['img']['name'];
                    $ext = strtolower(strrchr($uploadfile,"."));
                    $nome_atual = time().$ext;
                $posto = htmlspecialchars($_POST['posto']);
                $nome = htmlspecialchars($_POST['nome']);
                $semestre = htmlspecialchars($_POST['semestre']);
                
                if (!move_uploaded_file($_FILES['img']['tmp_name'], "../img/militarPadrao/".$nome_atual)) {
                    }
                else {
                    echo 'Não foi Possivel Concluir o Upload da Imagem';
                }
                
            $stmt = $connection->prepare("UPDATE destaquesemestre SET id =?, img=?, posto=?, nome=?, semestre=? WHERE id=".$id);
            $stmt->bind_param("issss", $id, $nome_atual, $posto, $nome, $semestre);
            $stmt->execute();
            
        mysqli_close($connection); 
        header("location: ../views/comSoc.php");
            }
}
