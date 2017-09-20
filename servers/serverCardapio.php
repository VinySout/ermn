<?php
session_start();
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){
    
    include_once '../entity/Cardapio.class.php';
    include_once '../repository/CardapioRepository.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../application/CardapioService.class.php';
    
        $conexao = new ConexaoDeInclusao();
        $cardapioService = new CardapioService($conexao);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
                $uploadfile = $_FILES['cardapio']['name'];
                $ext = strtolower(strrchr($uploadfile,"."));
                $nome_atual = "cp-".time().$ext;
                move_uploaded_file($_FILES['cardapio']['tmp_name'], "../usoInterno/arquivos/".$nome_atual);           
                
                $cardapio = new Cardapio(0, $nome_atual);
                $cardapioService->inserirCardapio($cardapio);
                header('Location: ../index.php');
        }
}else{
    header("Location: ../index.php");
    exit;
}