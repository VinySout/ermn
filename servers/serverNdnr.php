<?php
session_start();
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){
    
    include_once '../entity/Ndnr.class.php';
    include_once '../repository/NdnrRepository.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../application/NdnrService.class.php';
    
        $conexao = new ConexaoDeInclusao();
        $ndnrService = new NdnrService($conexao);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $uploadfile = $_FILES['ndnr']['name'];
                $ext = strtolower(strrchr($uploadfile,"."));
                $nome_atual = "ndnr-".time().$ext;
                move_uploaded_file($_FILES['ndnr']['tmp_name'], "../img/zips/".$nome_atual);           
                
                $ndnr = new Ndnr(0, $nome_atual);
                $ndnrService->inserirNdnr($ndnr);
                header('Location: ../index.php');
           
        }
}else{
    header("Location: ../index.php");
    exit;
}