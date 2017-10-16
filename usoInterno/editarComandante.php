<!DOCTYPE html>
<?php
session_start();
 header('Content-Type: text/html; charset=utf-8',true);
 
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){

    include_once '../entity/Comandante.class.php';
    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../entity/Ndnr.class.php';
    include_once '../entity/IndDesemp.class.php';
    include_once '../repository/NdnrRepository.class.php';
    include_once '../repository/ComandanteRepository.class.php';
    include_once '../application/ComandanteService.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../repository/CardapioRepository.class.php';
    include_once '../repository/IndDesempRepository.class.php';

    $conexao = new ConexaoDeInclusao();
    $comandanteService = new ComandanteService($conexao);   
    
    $planoDiaRepository = new PlanoDiaRepository($conexao);
    $pdList = $planoDiaRepository->listarPlanoDia();
    $ultimoPd = $pdList[0];

    $cardapioRepository = new CardapioRepository($conexao);
    $cardapioList = $cardapioRepository->listarCardapio();
    $ultimoCardapio = $cardapioList[0];
    
    $ndnrRepository = new NdnrRepository($conexao);
    $ndnrList = $ndnrRepository->listarNdnr();
    $ultimoNdnr = $ndnrList[0];
    
    $indDesempRepository = new IndDesempRepository($conexao);
    $indDesempList = $indDesempRepository->listarIndDesemp();
    $ultimoIndDesemp = $indDesempList[0];
    
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id'])){        
    $idComandante = htmlspecialchars($_GET['id']);
    $lista = $comandanteService->mostrarCmdt($idComandante);    
    }
}

?>  
<html lang="pt-br">
    <head>
        <title>Estação Radiogoniométrica da Marinha em Natal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <?php 
            include '../views/cssJsImports.php'; 
        ?>
    </head>
    <body id="wrapper">
        <?php 
            include '../views/header.php';
        ?>
        <section class="container nav-justified" id="main">
            
            <div class="links">
                    <?php 
                    include './navegacaoUsoInterno.php';
                    ?>
                    <div class="col-md-9">
                        <section>    
                            <?php
                                for($i=0; $i<1; $i++){
                                    $cmdt = $lista[0];
                                    ?>        
                                <form action="../repository/editarComandanteRepository.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $cmdt->getId()?>" />
                                    <input type="file" class="btn" name="foto" value="<?=$cmdt->getFoto()?>"/>
                                    <input class="form-control" type="text" name="nome" value="<?= $cmdt->getNome()?>">
                                    <input class="form-control" type="text" name="periodo" value="<?= $cmdt->getPeriodo()?>">
                                    <input type="submit" class="btn btn-xs btn-primary" value="salvar"/>
                                    <input type="button" class="btn btn-xs btn-default" value="cancelar" onClick="history.go(-1)">
                                </form>           
                                <?php } ?>
                        </section>
                    </div>
                </div>
        </section>
            <?php
            include '../views/footer.php';
            ?>
    </body>
</html>
<?php
}else{
    header("Location: ../views/comandantes.php");
    exit;
}