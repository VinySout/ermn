<?php
session_start();
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){
    
    include_once '../entity/DestaqueSemestre.class.php';
    include_once '../repository/DestaqueSemestreRepository.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../application/DestaqueSemestreService.class.php';
    
        $conexao = new ConexaoDeInclusao();
        $destSemService = new DestaqueSemestreService($conexao);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_FILES['imagem'])){
                
                $uploadfile = $_FILES['imagem']['name'];
                                
                $ext = strtolower(strrchr($uploadfile,"."));
                
                $nome_atual = time().$ext;
                
                if (!move_uploaded_file($_FILES['imagem']['tmp_name'], "../img/militarPadrao/".$nome_atual)) {
                    }
                else {
                    echo ' Não foi Possivel Concluir o Upload da Imagem ';
                }
                
                $posto = htmlspecialchars($_POST['posto']);
                $militar = htmlspecialchars($_POST['militar']);
                $semestre = htmlspecialchars($_POST['semestre']);
                $destSem = new DestaqueSemestre(0, $nome_atual, $posto, $militar, $semestre);
                $destSemService->inserirDestSem($destSem);
                header('Location: ../views/comSoc.php#destaqueRef');
                
            }
        }
}else{
    header("Location: ../index.php");
    exit;
}