<?php
session_start();
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){
    
    include_once '../entity/Guarapes.class.php';
    include_once '../repository/GuarapesRepository.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../application/GuarapesService.class.php';
    
        $conexao = new ConexaoDeInclusao();
        $guarapesService = new GuarapesService($conexao);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_FILES['imagem']) && isset($_FILES['pdf'])){
                
                $uploadfile = $_FILES['imagem']['name'];
                $uploadfile2 = $_FILES['pdf']['name'];
                                
                $ext = strtolower(strrchr($uploadfile,"."));
                $ext2 = strtolower(strrchr($uploadfile2, "."));
                
                $nome_atual = time().$ext;
                $nome_atual2 = time().$ext2;
                
                
                if(!move_uploaded_file($_FILES['pdf']['tmp_name'], "../img/edicoesOGuarapes/".$nome_atual2)){
                }else{
                    echo ' Não foi Possivel Concluir o Upload do PDF ';
                }
                
                if (!move_uploaded_file($_FILES['imagem']['tmp_name'], "../img/edicoesOGuarapes/".$nome_atual)) {
                    }
                else {
                    echo ' Não foi Possivel Concluir o Upload da Imagem ';
                }
                
                
                $edicao = htmlspecialchars($_POST['edicao']);
                $guarapes = new Guarapes(0, $nome_atual, $nome_atual2, $edicao);
                $guarapesService->inserirGuarapes($guarapes);
                header('Location: ../views/oGuarapes.php#oGuarapesRef');
                
            }
        }
}else{
    header("Location: ../index.php");
    exit;
}