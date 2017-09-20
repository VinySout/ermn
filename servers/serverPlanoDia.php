<?php
session_start();
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){
    
    include_once '../entity/PlanoDia.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../application/PlanoDiaService.class.php';
    
        $conexao = new ConexaoDeInclusao();
        $planoDiaService = new PlanoDiaService($conexao);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $uploadfile = $_FILES['planoDia']['name'];
                $ext = strtolower(strrchr($uploadfile,"."));
                $nome_atual = "pd-".time().$ext;
                move_uploaded_file($_FILES['planoDia']['tmp_name'], "../usoInterno/arquivos/".$nome_atual);           
                
                $planoDia = new PlanoDia(0, $nome_atual);
                $planoDiaService->inserirPlanoDia($planoDia);
                header('Location: ../index.php');
           
        }
}else{
    header("Location: ../index.php");
    exit;
}