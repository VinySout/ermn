<!DOCTYPE html>
<?php 
session_start();
    header('Content-Type: text/html; charset=utf-8',true);

    if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){
        
    include_once '../entity/Guarapes.class.php';
    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../entity/Ndnr.class.php';
    include_once '../repository/NdnrRepository.class.php';
    include_once '../repository/GuarapesRepository.class.php';
    include_once '../application/GuarapesService.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../repository/CardapioRepository.class.php';
    
    $conexao = new ConexaoDeInclusao();
    $guarapesService = new GuarapesService($conexao);

    $planoDiaRepository = new PlanoDiaRepository($conexao);
    $pdList = $planoDiaRepository->listarPlanoDia();
    $ultimoPd = $pdList[0];

    $cardapioRepository = new CardapioRepository($conexao);
    $cardapioList = $cardapioRepository->listarCardapio();
    $ultimoCardapio = $cardapioList[0];
    
    $ndnrRepository = new NdnrRepository($conexao);
    $ndnrList = $ndnrRepository->listarNdnr();
    $ultimoNdnr = $ndnrList[0];
        
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id'])){        
    $idGuarapes = htmlspecialchars($_GET['id']);
    $lista = $guarapesService->mostrarGuarapesId($idGuarapes);    
    }
}

?>
<html lang="pt-br">
    <head lang=pt-br"">
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
        <section class="container" id="main">
            
            <div class="links">
                    <?php 
                    include './navegacaoUsoInterno.php';
                    ?>
                    <div class="col-md-9 ">
                        <p class="styleTitulo" id="oGuarapesRef">O Guarapes</p>      
                        <section>    
                            <?php
                                for($i=0; $i<1; $i++){
                                    $edc = $lista[0];
                                    ?>        
                                <form action="../repository/editarGuarapesRepository.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $edc->getId()?>" />
                                    <input type="file" class="btn" name="imagem" value="<?=$edc->getImagem()?>"/>
                                    <input type="file" class="btn" name="pdf" value="<?=$edc->getPdf()?>"/>
                                    <input class="form-control" type="text" name="edicao" value="<?= $edc->getEdicao()?>">
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
    header("Location: ../views/oGuarapes.php#oGuarapesRef");
    exit;
}