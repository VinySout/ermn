<?php

$connection = new \mysqli("localhost", "root", "", "intranetermn");    

if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_FILES['imagem']) && isset($_FILES['pdf'])){

                $id = htmlspecialchars($_POST['id']);
                $uploadfile = $_FILES['imagem']['name'];
                $uploadfile2 = $_FILES['pdf']['name'];
                $edc = htmlspecialchars($_POST['edicao']);
                
                $ext = strtolower(strrchr($uploadfile,"."));
                $ext2 = strtolower(strrchr($uploadfile2, "."));
                
                $nome_atual = time().$ext;
                $nome_atual2 = time().$ext2;
                
                
                if(!move_uploaded_file($_FILES['pdf']['tmp_name'], "../img/edicoesOGuarapes/".$nome_atual2)){
                    }else{
                    echo 'Não foi Possivel Concluir o Upload do PDF';
                }
                
                if (!move_uploaded_file($_FILES['imagem']['tmp_name'], "../img/edicoesOGuarapes/".$nome_atual)) {
                    }
                else {
                    echo 'Não foi Possivel Concluir o Upload da Imagem';
                }
                
            $stmt = $connection->prepare("UPDATE oguarapes SET id =?, imagem=?, pdf=?, edicao=? WHERE id=".$id);
            $stmt->bind_param("isss", $id, $nome_atual, $nome_atual2, $edc);
            $stmt->execute();
            
        mysqli_close($connection); 
        header("location: ../views/oGuarapes.php");
            }
}
