<?php
session_start();
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){
    
    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php';
    include_once '../repository/CardapioRepository.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../application/CardapioService.class.php';
    include_once '../application/PlanoDiaService.class.php';
    
        $conexao = new ConexaoDeInclusao();
        $planoDiaService = new PlanoDiaService($conexao);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['planoDia']) !== ""){
                
                $uploadfile = $_FILES['planoDia']['name'];
                $ext = strtolower(strrchr($uploadfile,"."));
                $nome_atual = "pd-".time().$ext;
                move_uploaded_file($_FILES['planoDia']['tmp_name'], "../usoInterno/arquivos/".$nome_atual);           
                
                $planoDia = new PlanoDia(0, $nome_atual);
                $planoDiaService->inserirPlanoDia($planoDia);
                header('Location: ../index.php');
            }
            else if(isset($_POST['cardapio']) !== ""){
                
                $uploadfile = $_FILES['cardapio']['name'];
                $ext = strtolower(strrchr($uploadfile,"."));
                $nome_atual = "cp-".time().$ext;
                move_uploaded_file($_FILES['cardapio']['tmp_name'], "../usoInterno/arquivos/".$nome_atual);           
                
                $cardapio = new Cardapio(0, $nome_atual);
                $cardapioService->inserirCardapio($cardapio);
                //header('Location: ../index.php');
            }
        }
}else{
    header("Location: ../index.php");
    exit;
}