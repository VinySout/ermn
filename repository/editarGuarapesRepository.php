<?php

    
$conexao = mysql_connect("localhost","root", ""); 
if (!$conexao){
    die("Erro ao conectar: " . mysql_error());
}
mysql_select_db("intranetermn", $conexao);

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
                
                
        $query = "UPDATE oguarapes SET id ='$id', imagem='$nome_atual', pdf='$nome_atual2', edicao='$edc' WHERE id=".$id;
        mysql_query($query); 
        mysql_close($conexao); 
        header("location: ../views/oGuarapes.php");
            }
}
