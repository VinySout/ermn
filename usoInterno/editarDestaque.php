<!DOCTYPE html>
<?php 
    session_start();
    header('Content-Type: text/html; charset=utf-8',true);

    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php'; 
    include_once '../entity/DestaqueSemestre.class.php';
    include_once '../entity/Ndnr.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../repository/CardapioRepository.class.php';
    include_once '../application/DestaqueSemestreService.class.php';
    include_once '../repository/NdnrRepository.class.php';
    include_once '../repository/DestaqueSemestreRepository.class.php';
    
    $conexao = new ConexaoDeInclusao();
    
    $destService = new DestaqueSemestreService($conexao);
    
    
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
    $idDestaque = htmlspecialchars($_GET['id']);
    $destSemList = $destService->mostrarDestSem($idDestaque);
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
        <section class="container" id="main">
            
            <div class="links">
                    <?php 
                    include './navegacaoUsoInterno.php';
                    ?>
                    <div class="col-md-9 ">                        
                        <table>
                            <tr><p class="styleTitulo" id="destaqueRef">Destaques do Semestre</p></tr>
                        </table>
                        <session> 
                            <div id="contatoRef">Fale conosco pelo e-mail: <a href="#contatoRef">marques.barreto@marinha.mil.br</a></div>
                        <hr/>
                        </session>
                        <session>
                            <?php 
                                for($i=0; $i < 1; $i++){
                                $destSem = $destSemList[0];
                                 ?>   
                            
                            <form action="../repository/editarDestaqueRepository.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $destSem->getId()?>" />
                            <input type="file" name="img" value="<?= $destSem->getImg()?>"/>
                            <select name="posto">
                                        <option>======Posto======</option>
                                        <option value="Militar Padrão">Militar Padrão</option>
                                        <option value="Operador padrão PR">Operador padrão PR</option>
                                        <option value="Operador padrão PMO">Operador padrão PMO</option>                                        
                                        <option value="Marinheiro Padrão">Marinheiro Padrão</option>
                                    </select>
                            <input class="form-control" type="text" name="nome" value="<?= $destSem->getNome()?>">
                            <input class="form-control" type="text" name="semestre" value="<?= $destSem->getSemestre()?>">
                            <input type="submit" class="btn btn-xs btn-primary" value="salvar"/>
                            <input type="button" class="btn btn-xs btn-default" value="cancelar" onClick="history.go(-1)">
                            </form>
                            <?php } ?>
                        </session>
                    </div>
                </div>
        </section>
            <?php 
            include 'footer.php';
            ?>
    </body>
</html>
