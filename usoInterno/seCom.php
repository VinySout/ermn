<!DOCTYPE html>
<?php 
session_start();
 header('Content-Type: text/html; charset=utf-8',true);
 
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){

    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php';
    include_once '../entity/Ndnr.class.php';
    include_once '../entity/IndDesemp.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../repository/CardapioRepository.class.php';
    include_once '../repository/NdnrRepository.class.php';
    include_once '../repository/IndDesempRepository.class.php';
    
    $conexao = new ConexaoDeInclusao();
    $planoDiaRepository = new PlanoDiaRepository($conexao);
    $lista = $planoDiaRepository->listarPlanoDia();
    $ultimoPd = $lista[0];

    $cardapioRepository = new CardapioRepository($conexao);
    $cardapioList = $cardapioRepository->listarCardapio();
    $ultimoCardapio = $cardapioList[0];
    
    $ndnrRepository = new NdnrRepository($conexao);
    $ndnrList = $ndnrRepository->listarNdnr();
    $ultimoNdnr = $ndnrList[0];
    
    $indDesempRepository = new IndDesempRepository($conexao);
    $indDesempList = $indDesempRepository->listarIndDesemp();
    $ultimoIndDesemp = $indDesempList[0];
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
                        <div class="styleTitulo" id="seComRef">Secretaria de Comunicações</div>                          
                        <session>
                            <hr/>
                            <form action="../servers/serverPlanoDia.php" method="POST" enctype="multipart/form-data">
                                <table>
                                    <tr>
                                        <td><label for="planoDia">Inserir Plano do Dia:</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="file" id="planoDia" class="btn" name="planoDia"/></td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" class="btn btn-xs btn-primary" value="inserir"/>
                                            <input type="reset" class="btn btn-xs btn-default" value="cancelar">
                                        </td>
                                    </tr>
                                        
                                </table>
                            </form>
                        </session>
                        <session>
                            <hr/>
                            <form action="../servers/serverCardapio.php" method="POST" enctype="multipart/form-data">
                                <table>
                                    <tr>
                                        <td><label for="cardapio">Inserir Cadápio:</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="file" id="cardapio" class="btn" name="cardapio"/></td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" class="btn btn-xs btn-primary" value="inserir"/>
                                            <input type="reset" class="btn btn-xs btn-default" value="cancelar">
                                        </td>
                                    </tr>
                                        
                                </table>
                            </form>
                        </session>
                         <session>
                            <hr/>
                            <form action="../servers/serverNdnr.php" method="POST" enctype="multipart/form-data">
                                <table>
                                    <tr>
                                        <td><label for="ndnr">Tráfego TB/NDNR:</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="file" id="ndnr" class="btn" name="ndnr"/></td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" class="btn btn-xs btn-primary" value="inserir"/>
                                            <input type="reset" class="btn btn-xs btn-default" value="cancelar">
                                        </td>
                                    </tr>
                                        
                                </table>
                            </form>
                        </session>
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
    header("Location: ../index.php");
    exit;
}