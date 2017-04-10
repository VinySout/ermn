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
                $ext = strtolower(strrchr($uploadfile,"."));
                $nome_atual = time().$ext;
                if (!move_uploaded_file($_FILES['imagem']['tmp_name'], "../img/edicoesOGuarapes/".$nome_atual)) {
                      //grava na base de dados, no campo imagem, somente o nome da imagem que ficou gravado na variável $uploadfile que criamos acima.
                    }
                else {
                    echo 'Não foi Possivel Concluir o Upload da Imagem';
                    //não foi possível concluir o upload da imagem.
                }
                

                
                $edicao = htmlspecialchars($_POST['edicao']);
                $guarapes = new Guarapes(0, $nome_atual, "teste", $edicao);
                $guarapesService->inserirGuarapes($guarapes);
                header('Location: ../views/oGuarapes.php#oGuarapesRef');
                
            }
        }
}else{
    header("Location: ../index.php");
    exit;
}