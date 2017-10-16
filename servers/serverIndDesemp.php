<?php
session_start();
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){
    
    include_once '../entity/IndDesemp.class.php';
    include_once '../repository/IndDesempRepository.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../application/IndDesempService.php';
    
        $conexao = new ConexaoDeInclusao();
        $indDesempService = new IndDesempService($conexao);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $uploadfile = $_FILES['indDesemp']['name'];
                $ext = strtolower(strrchr($uploadfile,"."));
                $nome_atual = "indDesemp-".time().$ext;
                move_uploaded_file($_FILES['indDesemp']['tmp_name'], "../img/indDesemp/".$nome_atual);        
                
                $indDesemp = new IndDesemp(0, $nome_atual);
                $indDesempService->inserirIndDesemp($indDesemp);
                header('Location: ../index.php');
           
        }
}else{
    header("Location: ../index.php");
    exit;
}