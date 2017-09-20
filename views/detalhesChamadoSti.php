<!DOCTYPE html>
<?php
session_start();
 header('Content-Type: text/html; charset=utf-8',true);
    
    include_once '../entity/ChamadoSti.class.php';
    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php';
    include_once '../entity/Ndnr.class.php';
    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../repository/ChamadoStiRepository.class.php';
    include_once '../application/ChamadoStiService.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../repository/CardapioRepository.class.php';
    include_once '../repository/NdnrRepository.class.php';

    $conexao = new ConexaoDeInclusao();
    $chamadoStiService = new ChamadoStiService($conexao); 
    
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
        $idChamadoSti = htmlspecialchars($_GET['id']);
        $lista = $chamadoStiService->mostrarChamadoStiId($idChamadoSti);    
        }
    }
?>  
<html lang="pt-br">
    <head>
        <title>Estação Radiogoniométrica da Marinha em Natal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <?php 
            include './cssJsImports.php'; 
        ?>
    </head>
    <body id="wrapper">
        <?php 
            include 'header.php';
        ?>
        <section class="container nav-justified" id="main">
            
            <div class="links">
                    <?php 
                    include './navegacao.php';
                    ?>                
                    <div class="col-md-9">
                        <p class="styleTitulo" id="stiRef">STI</p>
                        <hr/>
                        <section>    
                            <?php
                                for($i=0; $i<1; $i++){
                                    $chamadoSti = $lista[0];
                                    ?>
                            <table class="tbDetalhes">
                                <tr>
                                    <td class="tbtituloSol" colspan="5" id="cDetalRef">Detalhes do Chamado</td></tr>
                                    <td>
                                    <input type="button" class="btn btn-xs btn-default" value="voltar" onClick="history.go(-1)"> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nome:</td>
                                    <td><?= $chamadoSti->getNome()?></td>
                                </tr>
                                <tr>
                                    <td>Usuário:</td>
                                    <td><?= $chamadoSti->getUsuario()?></td>
                                </tr>
                                <tr>
                                    <td>Descrição:</td>
                                    <td><?= $chamadoSti->getDescricao()?></td>
                                </tr>
                                <tr>
                                    <td>Data:</td>
                                    <td><?= $chamadoSti->getSdata()?></td>
                                </tr>
                                <tr>
                                    <td>Status:</td>
                                    <td><?= $chamadoSti->getProvidenciado()?></td>
                                </tr>
                                <tr>
                                    <td>Solução:</td>
                                    <td><?= $chamadoSti->getSolucao()?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <details>                                            
                                           Substituição: <?= $chamadoSti->getSubstituicao()?><br/>
                                           Descrição: <?= $chamadoSti->getItemDesc()?><br/>
                                           Ip do computador que abriu o chamado: <?= $chamadoSti->getInfPc()?><br/>
                                           Nome do computador que abriu o chamado: <?= $chamadoSti->getInfPc2()?>
                                        </details>
                                    </td>
                                </tr>
                                
                                </table>
                                    
                              
                                <?php } ?>
                        </section>
                    </div>
                </div>
        </section>
            <?php
            include 'footer.php';
            ?>
    </body>
</html>
<